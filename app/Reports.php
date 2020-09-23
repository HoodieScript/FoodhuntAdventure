<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //


    public function user(){
        return $this->belongsTo('App\User');
    }
   
    public function systemupdates(){
        return $this->belongsTo('App\Systemupdate');
    }
    
}
