@component('mail::message')
# Un message a été envoyé

- nom : {{ $request->nom }}
- prénom : {{ $request->prenom }}
- E-mail : {{ $request->mail }}
- Message : {{ $request->text }}




Thanks,<br>
{{ config('app.name') }}
@endcomponent
