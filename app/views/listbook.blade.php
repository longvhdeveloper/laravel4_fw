<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Book</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

</head>
<body>
    <div class="container">
        <h3>List book</h3>
        @if(isset($cart))
        <div class="col-md-12 pull-right">
            {{count($cart)}} books in cart - (<a href="{{URL::to('practice/viewcart')}}">View cart</a>)
        </div>
        @endif
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Info</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->info}}</td>
                    <td>{{$book->price}}</td>
                    <td><a href="{{URL::to('practice/addcart', array($book->id))}}" class="btn btn-primary">Add to cart</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>