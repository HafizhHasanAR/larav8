@component('mail::message')
# Introduction

Hi {{$user->name}}
<br>
Welcome to larachamp, your account has been created successfully. now you can choose your best match camp!

The body of your message.

@component('mail::button', ['url' => ''])
login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
