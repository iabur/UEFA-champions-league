@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">TEAMS</h1>


 <div class="container padding-top">
                    <div class="row portfolioContainer">


                        @foreach($teams as $team)
                        
                        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
                            <div class="item-team">
                                <div class="head-team">
                                    <img src="storage/{{$team->photo}}" alt="location-team">
                                    <div class="overlay"><a href="single-team.html">+</a></div>
                                </div>
                                <div class="info-team">
                                    <span class="logo-team">
                                        <img src="storage/{{$team->flag}}" alt="logo-team">
                                    </span>
                                    <h4>{{$team->name}}</h4>
                                    
                                    </div>
                                
                            </div>
                        </div>
                        
                        @endforeach

                        
                  </div>
                </div>

@endsection