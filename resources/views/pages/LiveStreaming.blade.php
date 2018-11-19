@extends('layout')
@section('content')

<br><br>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($livestreams as $livestream)	
<div class="container">
  <h1 >{{$livestream->match}}</h1>
  <p ><h5>DESCRIPTION: </h5>{{$livestream->description}}</p>            
  <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="{{$livestream->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
</div>
</div>
@endforeach


	<form action="/save_comment" method="Post">
     {{csrf_field()}}
		<table>
			<tr>
			
				<div class="form-group">
                 <label for="comment">Comment:</label>
                  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                   </div>
			</tr>
			<tr>
				<td ><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>

 @foreach($comments as $comment)

 <h1 class="text-center" >{{$comment->comment}}</h1>
 <br>

 @endforeach

@endsection