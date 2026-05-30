@component('mail::message')
# New Contact Enquiry

**Name:** {{ $contact->name }}
**Email:** {{ $contact->email }}
**Mobile:** {{ $contact->mobile }}
**Subject:** {{ $contact->subject }}
**Service:** {{ $contact->service }}

**Message:**
{{ $contact->message }}

@endcomponent
