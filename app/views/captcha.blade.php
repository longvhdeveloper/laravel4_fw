<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Captcha</title>
</head>
<body>
    {{Form::open(array('url' => 'practice/docaptcha'))}}
    {{Form::label('keyword', 'Anti spamer')}}
    <a href="javascript:void(0)" id="refresh">Refresh</a><br/>
    <img src="{{$image}}" id="captcha"/>
    <br/>
    {{Form::label('captcha', 'Captcha')}}
    {{Form::text('captcha', '', array('id' => 'text'))}}
    <span id="result"></span>
    <br/>
    {{Form::submit('Submit', array('id' => 'ok'))}}
    {{Form::close()}}

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#refresh').click(function(){
        $('#captcha').load('{{URL::to('/')}}/practice/loadcaptcha', function(result){
            $(this).attr('src', result);
        });
    });

    $('#ok').click(function(event){
        event.preventDefault();
        var captcha = $('#text').val();
        $.ajax({
            url: '{{URL::to('/')}}/practice/docaptcha',
            type: 'post',
            data: 'captcha=' + captcha,
            async:true,
            success:function(result){
                $('#result').html(result.response);
            }
        });
    });
});
</script>
</html>