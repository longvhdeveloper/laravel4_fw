<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Cart</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <h3>View cart</h3>
        {{Form::open(array('url' => 'practice/updatecart'))}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Number</th>
                    <th>Price</th>
                    <th>Money</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($cart))
                <?php
                    $total = 0;
                ?>
                @foreach($cart as $id => $book)
                <tr>
                    <td>{{$id}}</td>
                    <td>{{$book['name']}}</td>
                    <td>
                        {{Form::text('qt['.$id.']', $book['num'], array('size' => '10'))}}
                    </td>
                    <td>{{$book['price']}}</td>
                    <td>{{$book['num'] * $book['price']}}</td>
                    <?php
                        $total += $book['num'] * $book['price'];
                    ?>
                    <td><a href="{{URL::to('practice/removeitem', array($id))}}" class="btn btn-danger">Remove</a></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4">Total</td>
                    <td>{{$total}}</td>
                    <td>
                        <a href="{{URL::to('practice/emptycart')}}" class="btn btn-danger">Remove all</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" align="center">
                        <button type="submit" class="btn btn-warning">Update cart</button>
                        <a href="{{URL::to('practice/listbook')}}" class="btn btn-info">Buy more</a>
                        <a href="javascript:void(0)" class="btn btn-success">Checkout</a>
                    </td>
                </tr>
                @else
                <tr><td colspan="6" align="center">Item not found . <a href="{{URL::to('practice/listbook')}}">Buy a book</a></td></tr>
                @endif
            </tbody>
        </table>
        {{Form::close()}}
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>