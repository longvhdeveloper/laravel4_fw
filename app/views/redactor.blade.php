<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reactor</title>
<link type="text/css" rel="stylesheet" href="{{asset('public/css/redactor.css')}}" />
</head>
<body>
    {{Form::open()}}
    {{Form::label('name', 'Your name')}}<br/>
    {{Form::text('name')}}
    <br/>
    {{Form::label('note')}}
    <br/>
    {{Form::textarea('mytext', '', array('id' => 'my_text'))}}
    <br/>
    {{Form::submit('Submit')}}
    {{Form::close()}}
</body>
<script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/redactor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#my_text').redactor({
            focus: true,
            imageUpload: '{{URL::to('/')}}/practice/process01'
        });
    });
</script>
</html>