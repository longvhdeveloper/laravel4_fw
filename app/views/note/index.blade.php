<html>
    <head>
        <title>Index</title>
    </head>
    <body>
        <table style="width: 450px;">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Information</th>
            </tr>
            @foreach($notes as $note)
            <tr>
                <td>{{$note->id}}</td>
                <td>{{$note->title}}</td>
                <td>{{$note->info}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
