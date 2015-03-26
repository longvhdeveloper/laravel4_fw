@extends('template')

@section('titlepage')
@parent -
{{$titlepage}}
@stop

@section('content')
  @if($id >  100)
      <h1>Hello Laravel Framework</h1>
  @else
      <h1>Good bye Laravel Framework</h1>
  @endif

  <ul>
  @foreach($data as $item)
      <li>{{$item}}</li>
  @endforeach
  </ul>

  @for($i = 0; $i < count($data); $i++)
      {{$data[$i]}} <br/>
  @endfor

  <a href="{{url('url/full', ['999'])}}">My Link</a>
  <a href="{{route('route_user')}}">My Link</a>
  <a href="{{action('LayoutController@index')}}">My Link</a>
  <a href="{{asset('public/style/main.css')}}">My Link</a>
@stop