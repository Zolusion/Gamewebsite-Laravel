@component('mail::message')
Bedankt voor het registreren op onze website 

Dit is een test we doen ons best om onze website in orde te krijgen excuses
voor de ongemak

@component('mail::button', ['url' => 'https:://www.rocketgames.nl'])
Bezoek onze site
@endcomponent

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
