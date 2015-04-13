<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>
    @if(Session::has('error'))
    <p class="error">
        {{Session::get('error')}}
    </p>
    @endif

    {{Form::open(array('url' => 'auth/dologin'))}}
    {{Form::label('username', 'Username')}}
    {{Form::text('username')}}
    <br/>
    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}
    <br/>
    {{Form::submit('Login')}}
    {{Form::close()}}
</body>
</html>