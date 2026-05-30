<?php

namespace App\Http\Controllers\Admin;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');

        $contacts = Contact::query()
            ->when($q, function ($query, $q) {
                return $query->where('name', 'like', "%$q%")
                             ->orWhere('email', 'like', "%$q%")
                             ->orWhere('mobile', 'like', "%$q%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->appends(['q' => $q]);

        return view('admin.contacts.index', compact('contacts', 'q'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }

    public function exportCsv(): StreamedResponse
{
    $fileName = 'contacts_' . now()->format('Y-m-d_H-i-s') . '.csv';

    $headers = [
        "Content-type"        => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    ];

    $columns = ['ID', 'Name', 'Mobile', 'Email', 'Subject', 'Message',  'Created At'];

    $callback = function() use ($columns) {
        $handle = fopen('php://output', 'w');
        fputcsv($handle, $columns);

        $contacts = \App\Models\Contact::orderBy('id', 'desc')->cursor();

        foreach ($contacts as $contact) {
            fputcsv($handle, [
                $contact->id,
                $contact->name,
                $contact->mobile,
                $contact->email,
                $contact->subject,
                $contact->message,
                $contact->created_at->format('d-M-Y H:i'),
            ]);
        }

        fclose($handle);
    };

    return response()->stream($callback, 200, $headers);
}
}
