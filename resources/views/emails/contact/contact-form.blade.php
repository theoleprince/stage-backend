@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{ $data['name'] }} de l'adresse  ({{ $data['email']}})

Object 
{{ $data['subject']}}

Message
{{ $data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
