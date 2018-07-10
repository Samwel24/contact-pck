@component('mail::message')
# Introduction

This is a new message from {{ $name }}.

{{ $message }}

@component('mail::button', ['url' => ''])
Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
