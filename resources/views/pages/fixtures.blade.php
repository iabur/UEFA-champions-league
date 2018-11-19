@extends('layout')
@section('content')

<br> <br>

<h1 class="text-center">FIXTURES</h1>
<section class="content-info">


                <div class="container paddings-mini">
                    <div class="row">

                        <div class="col-lg-12">
                            <h3 class="clear-title">Matches</h3>
                        </div>

                        <div class="col-lg-12">
                            <table class="table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Team A</th>
                                        <th class="text-center">VS</th>
                                        <th>Team B</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                @foreach($fixtures as $fixture)
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="storage/{{$fixture->a_logo}}" alt="icon">
                                            <strong>{{$fixture->a_name}}</strong><br>
                                            
                                        </td>
                                        <td class="text-center">Vs</td>
                                        <td>
                                            <img src="storage/{{$fixture->b_logo}}" alt="icon1">
                                            <strong>{{$fixture->b_name}}</strong><br>
                                            
                                        </td>
                                        <td>
                                            {{$fixture->time}}<br>
                                            <small class="meta-text">{{$fixture->place}}</small>
                                        </td>
                                    </tr>
                                    
                                   

                                    </tbody>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>



@endsection