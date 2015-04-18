<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Do crop image</title>
<link type="text/css" rel="stylesheet" href="{{asset('public/css/jquery.Jcrop.css')}}" />
</head>
<body>
    {{Form::open(array('url' => 'practice/createimg'))}}
    <img src="{{asset('uploads/img/' . $img)}}" id="imgcrop" />
    {{Form::hidden('x', '', array('id' => 'x'))}}
    {{Form::hidden('y', '', array('id' => 'y'))}}
    {{Form::hidden('w', '', array('id' => 'w'))}}
    {{Form::hidden('h', '', array('id' => 'h'))}}
    {{Form::hidden('img', $img)}}
    {{Form::submit('Crop image')}}
    {{Form::close()}}
</body>
<script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.Jcrop.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#imgcrop').Jcrop({
        onSelect:updateImg
    });
});
function updateImg(e){
    $('#x').val(e.x);
    $('#y').val(e.y);
    $('#w').val(e.w);
    $('#h').val(e.h);
}
</script>
</html>