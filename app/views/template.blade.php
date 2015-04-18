<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@section('titlepage')
Home page
@show
</title>
</head>
<body>
    @include('header')
    <div id="main">
    @yield('content')
    </div>
  <div id="bottom">&copy; 2015</div>
</body>
</html>