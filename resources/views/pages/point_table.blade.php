@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">POINT TABLE</h1>


<section class="content-info">

                <div class="container paddings-mini">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table-striped table-responsive table-hover result-point">
                                <thead class="point-table-head">
                                    <tr>
                                        <th class="text-left">No</th>
                                        <th class="text-left">TEAM</th>
                                        <th class="text-center">P</th>
                                        <th class="text-center">W</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">L</th>
                                        <th class="text-center">GS</th>
                                        <th class="text-center">GA</th>
                                        <th class="text-center">+/-</th>
                                        <th class="text-center">PTS</th>
                                    </tr>
                                </thead>

                                @foreach($points as $point)

                                <tbody class="text-center">
                                    <tr>
                                        <td class="text-left number">{{$point->id}} <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                            <img src="storage/{{$point->logo}}" alt=""><span>{{$point->name}}</span>
                                        </td>
                                        <td>{{$point->p}}</td>
                                        <td>{{$point->w}}</td>
                                        <td>{{$point->d}}</td>
                                        <td>{{$point->l}}</td>
                                        <td>{{$point->gs}}</td>
                                        <td>{{$point->ga}}</td>
                                        <td>{{$point->p_n}}</td>
                                        <td>{{$point->pts}}</td>
                                    </tr>
                                     </tbody>

                                     @endforeach
                            </table>
                        </div>
                    </div>
                </div>



@endsection