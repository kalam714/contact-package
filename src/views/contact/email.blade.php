@component('mail::message')
# Introduction
Nee message from {{$name}} <br>
{{$msg}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
