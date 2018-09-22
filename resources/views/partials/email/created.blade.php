@component('mail::message')
# Hey Admin

-   {{$name}}<br>
-   {{$email}}

@component('mail::panel')
    {{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
