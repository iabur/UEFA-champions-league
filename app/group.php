<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class group extends Model
{
    public function team(){
    	
    	return $this->hasMany(team::class);
    }
}
