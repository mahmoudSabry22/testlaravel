@component('mail::message')
# new project {{ $pro->title }}

{{ $pro->description }}

@component('mail::button', ['url' => url('/projects/'.$pro->title)])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
