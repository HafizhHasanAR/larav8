@component('mail::message')
# Register camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank u for register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button below.


@component('mail::button', ['url' => route('dashboard')])
My dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
