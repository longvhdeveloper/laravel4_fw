<html>
    <head>
        <title>Edit note</title>
    </head>
    <body>
        {{Form::model($note, array('route' => array('note.update', $note->id), 'method' => 'PUT'))}}
        
        {{Form::label('title', 'Title')}}
        {{Form::text('title')}}
        <br/>
        
        {{Form::label('info', 'Information')}}
        {{Form::textarea('info')}}
        
        <br/>
        
        {{Form::submit('Submit')}}
        
        {{Form::close()}}
    </body>
</html>

