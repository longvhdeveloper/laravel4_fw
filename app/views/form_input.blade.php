<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
    {{Form::open(array('url' => 'input/process'))}}

    {{Form::hidden('user', 'jackie')}}
    {{Form::hidden('pass', '123456')}}

    {{Form::submit('Submit')}}
    {{Form::close()}}
</body>
</html>