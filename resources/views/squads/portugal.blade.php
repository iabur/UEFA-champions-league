@extends('layout')
@section('content')

<div class="container padding-top">
                    <div class="row portfolioContainer">

                        @foreach($players as $player)
                        <!-- Item Player -->
                        <div class="col-xl-3 col-lg-4 col-md-6 forward">
                            <div class="item-player">
                                <div class="head-player">
                                    <img src="storage/{{$player->photo}}" alt="location-team">
                                    <div class="overlay"><a href="single-player.html">+</a></div>
                                </div>
                                <div class="info-player">
                                    <span class="number-player">
                                        {{$player->j_no}}
                                    </span>
                                    <h4>
                                        {{$player->name}}
                                        <span>{{$player->p_type}}</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <strong>NATIONALITY</strong><span>{{$player->nationality}}</span>
                                        </li>
                                        <li><strong>MATCHES:</strong> <span>{{$player->matches}}</span></li>
                                        <li><strong>AGE:</strong> <span>{{$player->age}}</span></li>
                                    </ul>
                                </div>
                                <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Item Player -->
                    </div>
        </div>

@endsection