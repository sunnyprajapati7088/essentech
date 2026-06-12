@component('mail::message')
# Hi {{ $contact->name }},

Thank you for reaching out to **EssenTechs**.
We’ve received your message and our team will get back to you soon.

**Your Query:**
{{ $contact->message }}

Thanks,
**EssenTechs Team**
@endcomponent
