@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">RESULT</h1>

 <section class="content-info">

                <div class="container padding-top">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="recent-results results-page">
                                <div class="info-results">
                                    <ul>
                                    	@foreach($results as $result)
                                        <li>
                                            <span class="head">
                                                {{$result->a_name}} Vs    {{$result->b_name}} <span class="date">{{$result->date}}</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="storage/{{$result->a_logo}}" alt="">
                                                    {{$result->a_name}}
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="storage/{{$result->b_logo}}" alt="">
                                                    {{$result->b_name}}
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach

                                      </ul>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>



@endsection