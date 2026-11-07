<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display listing of active offers
     */
    public function index()
    {
        // Auto-sync any expired offers
        $allActive = Offer::where('status', 'active')->get();
        foreach ($allActive as $o) {
            $o->checkAndSyncStatus();
        }

        $offers = Offer::active()
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('offers.index', compact('offers'));
    }

    /**
     * Display a specific offer
     */
    public function show(string $slug)
    {
        $offer = Offer::where('slug', $slug)->firstOrFail();
        $offer->checkAndSyncStatus();

        if (!in_array($offer->status, ['active', 'scheduled']) && !auth()->check()) {
            abort(404, 'Offer is no longer active.');
        }

        $relatedOffers = Offer::active()
            ->where('id', '!=', $offer->id)
            ->take(3)
            ->get();

        return view('offers.show', compact('offer', 'relatedOffers'));
    }
}
