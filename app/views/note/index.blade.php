<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <table width="450" border="1">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Information</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($notes as $note)
            <tr>
                <td>{{$note->id}}</td>
                <td>{{$note->title}}</td>
                <td>{{$note->info}}</td>
                <td><a href="{{URL::route('note.edit', $note->id)}}">Edit</a></td>
                <td>{{Form::open(array('route' => array('note.destroy', $note->id), 'method' => 'delete'))}}
                    <button type="submit">Delete</button>
                    {{Form::close()}}
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
