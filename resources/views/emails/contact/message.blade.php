@component('mail::message')
# New Contact Message

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Subject:** {{ $data['subject'] }}

---

**Message:**
{{ $data['message'] }}

---

**Consent given:** {{ $data['consent'] ? 'Yes' : 'No' }}
**IP Address:** {{ $data['ip'] }}
**User Agent:** {{ $data['user_agent'] }}
**Submitted at:** {{ $data['submitted_at'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
