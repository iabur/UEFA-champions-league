<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;
use App\team;
use App\player;
use App\fixture;
use App\result;
use App\ptable;
use App\venue;
use App\award;
use App\comment;
use App\livestream;
use App\news;
use DB;

class iaburcontroller extends Controller
{
    public function group(){
        $groups = group::all();
        $group1 = group::find(1)->team;
        $group2 = group::find(2)->team;
        $group3 = group::find(3)->team;
        $group4 = group::find(4)->team;
        $group5 = group::find(5)->team;
        $group6 = group::find(6)->team;
        $group7 = group::find(7)->team;
        $group8 = group::find(8)->team;
        return view('pages.group',['groups'=>$groups,'group1'=>$group1,'group2'=>$group2,'group3'=>$group3,'group4'=>$group4,'group5'=>$group5,'group6'=>$group6,'group7'=>$group7,'group8'=>$group8]);
    }

     

    public function team(){
      $teams = team::all();
      return view('pages.team',['teams'=>$teams]);
    }

    public function player() {
    	$players = player::all();
    	return view('pages.player',['players'=>$players]);
    }

    public function fixture(){
        $fixtures = fixture::all();
        return view('pages.fixtures',['fixtures'=>$fixtures]);
    }

    public function result(){
        $results = result::all();
        return view('pages.result',['results'=>$results]);
    }
    public function point_table(){
       $points = ptable::all();
        return view('pages.point_table',['points'=>$points]);
    }
    
     public function stadium(){
        $venues = venue::all();
        return view('pages.stadium',['venues'=>$venues]);
    }

    public function award() {
        $awards = award::all();
        return view('pages.award',['awards'=>$awards]);
    }

    public function news()
     {
        $news = news::All();
         return view('pages.news',['news'=>$news]);
    }

    public function livestreaming()
    {
        $comments = comment::all();
        $livestreams = livestream::all();
        return view('pages.livestreaming',['comments'=>$comments,'livestreams'=>$livestreams]);
        
    }

     public function save_comment(Request $req)
     {
        
        $comment = $req->input('comment');
        $data = array('comment'=>$comment);
        DB::table('comments')->insert($data);
        echo "successfully posted your comment";
        return redirect('livestreaming');

    }
    

   

    
    

}
