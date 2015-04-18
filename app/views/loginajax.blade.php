<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login ajax</title>
</head>
<body>
    <div id="result"></div>
    {{Form::open(array('url' => '', 'id' => 'my_form'))}}
    <table>
        <tr>
            <td>{{Form::label('username', 'Username')}}</td>
            <td>{{Form::text('username')}}</td>
        </tr>
        <tr>
            <td>{{Form::label('password', 'Password')}}</td>
            <td>{{Form::password('password')}}</td>
        </tr>
        <tr>
            <td></td>
            <td>{{Form::button('Login', array('id' => 'submit'))}}</td>
        </tr>
    </table>
    {{Form::close()}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(){
            var data = $('#my_form').serialize();
            $.ajax({
                url: "{{URL::to('/')}}/ajax/loginajax_process",
                dataType: 'json',
                type: 'post',
                data: data,
                async : true,
                success: function(json){
                    if (json.success == '1') {
                        $('#my_form').hide();
                        $('#result').html(json.message);
                    }

                    $('#result').html(json.message);
                }
            });
        });
    });
</script>
</html>
