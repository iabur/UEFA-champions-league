@extends('layout')
@section('content')
<br><br>
<h1 class="text-center">GROUPS</h1>


 

                <div class="container padding-top">
                    <div class="groups-list page-group">
                        <div class="row">
                          <?php 
                             $a = 'group1';
                           ?>
                         
                               @foreach($groups as $key)
                               <div class="col-lg-3 col-md-6">
                               
                               <h5><a href="groups.html">{{$key->name}}</a></h5>
                                <div class="item-group">
                                    <ul>
                                        <li>

                                       
                                          
                                           @foreach($$a as $g)
                                           <a href="single-team.html">
                                                <img style="margin: 10px;" src="storage/{{$g->flag}}" alt="">

                                                
                                                {{$g->name}}

                                                
                                            </a>
                                             @endforeach
                                        </li>

                                        
                                    </ul>
                                </div>
                            </div>
                            

                             <?php 
                             $a++;
                              ?>
                        
                         
                        @endforeach
                       
                            
                       
                            
                           
                        </div>
                    </div>
                </div>


@endsection