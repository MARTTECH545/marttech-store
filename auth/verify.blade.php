<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{trans('messages.Verify Your Email Address')}}</h2>

<div>
    {{trans('messages. Thanks for creating an account with the verification demo app.
     Please follow the link below to verify your email address')}}
    {{ URL::to('/register/verify/' . $confirmation_code) }}.<br/>

</div>

</body>
</html>