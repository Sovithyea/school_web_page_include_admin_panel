{{-- <h1>Forget Password Email</h1>
Hello {{$username}}
You can reset password from bellow link:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a> --}}


@component('mail::message')
# Hello {{$username}}
 
Here is your reset password link!
 
@component('mail::button', ['url' => route('reset.password.get', $token)]) 
    Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
{{-- env('APP_NAME') --}}
@endcomponent
