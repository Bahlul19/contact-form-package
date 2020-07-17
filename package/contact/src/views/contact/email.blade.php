@component('mail::message')
# Introduction

The message is send by {{$name}}
<br/>
Subject : {{$subject}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
