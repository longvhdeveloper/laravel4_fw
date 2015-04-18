<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload file</title>
</head>
<body>
    <p class="error">
        @foreach($errors->all('<div>:message</div>') as $error)
        {{$error}}
        @endforeach
    </p>
    {{Form::open(array('url' => 'upload/process', 'files' => true))}}
    {{Form::label('avatar', 'Avatar')}}
    {{Form::file('img')}}
    {{Form::submit('Upload')}}
    {{Form::close()}}
</body>
</html>