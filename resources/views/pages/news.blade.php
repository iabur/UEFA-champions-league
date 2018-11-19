@extends('layout')
@section('content')

<br><br>
<h1 class="text-center">Recent News</h1>

@foreach($news as $news)
<div class="container">
  <h1 >{{$news->heading}}</h1>
  <p ><h5>description</h5>{{$news->description}}</p>            
  <img style="margin-bottom: 100px;" src="storage/{{$news->photo}}" class="img-circle" alt="Cinque Terre" width="100%" height="100%"> 
</div>
@endforeach


@endsection