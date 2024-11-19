@component('mail::message')

<h1> {{($data['name'])}} </h1><br/>
<p> {{$data['email']}} </p>

Your Application submitted successfully...

Thanks,<br>
{{ config('app.name') }}
@endcomponent