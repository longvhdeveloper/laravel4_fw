<html>
    <head>
        <title>Process Multi</title>
    </head>
    <body>

        @if($errors)
        <div class="error">
            <ul>
                @foreach($errors->all('<li>:message</li>') as $error)
                {{$error}}
                @endforeach
            </ul>
        </div>
        @endif

        {{Form::open(array('url' => 'upload/do_upload', 'files' => true))}}

        {{Form::hidden('number', $number)}}

        @for($i = 0; $i < $number; $i++)

        {{Form::file('fimage' . $i)}} <br/>

        @endfor

        {{Form::submit('Upload')}}

        {{Form::close()}}
    </body>
</html>
