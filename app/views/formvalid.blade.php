<html>
<head>
    <title>Validate form</title>
</head>
<body>
    <p class="error">
        @foreach($errors->all('<div>:message</div>') as $error)
        {{$error}}
        @endforeach
    </p>
    {{Form::open(array('url' => 'validate/process'))}}
    {{--username--}}
    {{Form::label('username', 'Username')}}
    {{Form::text('username')}}

    {{$errors->first('username', '<span>:message</span>')}}
    <br/>

    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}
    {{$errors->first('password', '<span>:message</span>')}}
    <br/>

    {{Form::label('password_confirmation', 'Re-password')}}
    {{Form::password('password_confirmation')}}

    <br/>

    {{Form::label('email', 'Email')}}
    {{Form::email('email')}}
    {{$errors->first('email', '<span>:message</span>')}}
    <br/>

    {{Form::submit('Submit')}}

    {{Form::close()}}
</body>
</html>