@component('mail::message')


Name : {{ $mail_data['name'] }} <br>
E-mail : {{ $mail_data['email'] }} <br>
Contact Number : {{ $mail_data['phone'] }} <br>
Time : {{ $mail_data['time'] }} <br>
Message : {{ $mail_data['message'] }} <br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
