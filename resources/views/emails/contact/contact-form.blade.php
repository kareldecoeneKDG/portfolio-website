@component('mail::message')
# kareldecoene.be | CONTACT

<strong>Name</strong> {{ $data['name'] }}<br>
<strong>Email</strong> {{ $data['email'] }}

<strong>Message</strong>

{{ $data['message'] }}
@endcomponent
