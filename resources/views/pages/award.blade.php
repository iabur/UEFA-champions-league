@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">AWARDS</h1>

@foreach($awards as $award)

<div class="container">
  <h2 >{{$award->award}}</h2>
  <p >{{$award->description}}</p>            
  <img style="margin-bottom: 100px;" src="storage/{{$award->photo}}" class="img-circle" alt="Cinque Terre" width="100%" height="100%"> 
</div>
@endforeach

@endsection