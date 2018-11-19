@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">STADIUMS</h1>

@foreach($venues as $venue)
<div class="container">
  <h1 >{{$venue->name}}</h1>
  <p ><h5>Matches</h5>{{$venue->matches}}</p>            
  <img style="margin-bottom: 100px;" src="storage/{{$venue->photo}}" class="img-circle" alt="Cinque Terre" width="100%" height="100%"> 
</div>
@endforeach


@endsection