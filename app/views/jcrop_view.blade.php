<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jcrop</title>
</head>
<body>
    {{Form::open(array('url' => 'practice/process02', 'files' => true))}}

    {{Form::label('img', 'Your image')}}
    {{Form::file('img')}}
    {{Form::submit('Submit')}}
    {{Form::close()}}
</body>
</html>