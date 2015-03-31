<html>
    <head>
        <title>Upload Multiple</title>
    </head>
    <body>
        {{Form::open(array('url' => 'upload/proccess_multi'))}}

        {{Form::label('number', 'Number image')}}

        <?php
        $numbers = array();

        for ($i = 1; $i < 11; $i++) {
            $numbers[$i] = $i;
        }
        ?>

        {{Form::select('number', $numbers)}}
        <br/>

        {{Form::submit('Send')}}

        {{Form::close()}}
    </body>
</html>
