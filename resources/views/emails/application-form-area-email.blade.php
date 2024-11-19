@component('mail::message')

<h1> Mr. {{$AppData->name}}</h1>
<p>{{$AppData->email}}</p>
<p>{{$AppData->mobile}}</p>
<p>{{$AppData->address}}</p>
<p>@if(!empty($AppData->statename->name)) {{$AppData->statename->name}} @endif</p>
<p>@if(!empty($AppData->cityname->name)) {{$AppData->cityname->name}} @endif</p>
<p>@if(!empty($AppData->area->name)) {{$AppData->area->name}} @endif</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent