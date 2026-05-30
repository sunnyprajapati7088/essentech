<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactAdminMail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        $data = $request->validated();

        // Store in DB
        $contact = Contact::create($data);

        // Send email to Admin
        Mail::to("info@essentechs.com")->send(new ContactAdminMail($contact));
        // Send confirmation email to User
        //Mail::to($contact->email)->send(new ContactUserMail($contact));

        return redirect()->route('contact.success');
    }
}
