<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
use App\player;

class squadcontroller extends Controller
{
    public function russia(){
    	$players = team::find(1)->player;
    	return view('squads.russia',['players'=>$players]);
    }
    public function portugal(){
    	$players = team::find(2)->player;
    	return view('squads.portugal',['players'=>$players]);
    }
}
