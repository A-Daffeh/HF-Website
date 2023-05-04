<h1>Hello {{ $user->name}} </h1>
<p>
    Please click the password reset button to rest your password
    <a href="{{ url('reset-password/'.$user->email. '/'.$code)}}">Reset Password</a>
</p>