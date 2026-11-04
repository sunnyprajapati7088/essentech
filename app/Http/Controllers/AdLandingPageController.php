<?php

namespace App\Http\Controllers;

use App\Models\AdLandingPage;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdLandingPageController extends Controller
{
    /**
     * Show public landing page by direct slug (e.g. /ads-washing-machine-repair).
     */
    public function show($slug)
    {
        $page = AdLandingPage::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('landing-pages.show', compact('page'));
    }

    /**
     * Preview landing page (allows admins to view drafts).
     */
    public function preview($id)
    {
        $page = AdLandingPage::findOrFail($id);

        return view('landing-pages.show', [
            'page' => $page,
            'isPreview' => true,
        ]);
    }

    /**
     * Submit lead from modal form, save to contacts table, and generate WhatsApp URL.
     */
    public function submitLead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'mobile' => 'required|string|max:20',
            'service' => 'nullable|string|max:150',
            'problem' => 'nullable|string|max:150',
            'area' => 'nullable|string|max:150',
            'slug' => 'nullable|string|max:150',
        ]);

        $landingPage = null;
        if (!empty($validated['slug'])) {
            $landingPage = AdLandingPage::where('slug', $validated['slug'])->first();
        }

        // Build composite message for contacts table
        $notes = [];
        if (!empty($validated['problem'])) {
            $notes[] = "Problem: " . $validated['problem'];
        }
        if (!empty($validated['area'])) {
            $notes[] = "Area/Location: " . $validated['area'];
        }
        $compositeMessage = implode(" | ", $notes);

        // Store into contacts table for the admin
        $contact = Contact::create([
            'name' => $validated['name'],
            'mobile' => $validated['mobile'],
            'service' => $validated['service'] ?? 'Landing Page Booking',
            'page' => $validated['slug'] ?? 'ad-landing-page',
            'subject' => 'Ad Booking Request: ' . ($validated['service'] ?? 'Appliance Repair'),
            'message' => $compositeMessage,
        ]);

        // WhatsApp number: use landing page number or default
        $whatsappNumber = $landingPage?->whatsapp_number ?: '919746683310';
        // Clean phone number (digits only)
        $whatsappNumber = preg_replace('/[^0-9]/', '', $whatsappNumber);

        // Build WhatsApp text
        $waLines = [
            "Hello Essen Techs,",
            "I would like to book a service request:",
            "• Name: " . $validated['name'],
            "• Mobile: " . $validated['mobile'],
        ];

        if (!empty($validated['service'])) {
            $waLines[] = "• Service: " . $validated['service'];
        }
        if (!empty($validated['problem'])) {
            $waLines[] = "• Problem: " . $validated['problem'];
        }
        if (!empty($validated['area'])) {
            $waLines[] = "• Area: " . $validated['area'];
        }

        $waText = implode("\n", $waLines);
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . rawurlencode($waText);

        return response()->json([
            'success' => true,
            'message' => 'Service request received successfully! Opening WhatsApp...',
            'whatsapp_url' => $whatsappUrl,
        ]);
    }
}
