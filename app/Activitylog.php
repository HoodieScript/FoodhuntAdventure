<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitylog extends Model
{
    //
    protected $table = 'activity_log';

    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function systemupdates(){
        return $this->belongsTo('App\Systemupdate');
    }
}
