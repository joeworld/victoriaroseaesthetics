@component('mail::message')
New website submition

From:

Name: {{$details['name']}}

Email: {{$details['email']}}

Phone: {{$details['phone']}}

Message: {{$details['message']}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
