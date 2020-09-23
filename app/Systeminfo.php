<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Systeminfo extends Model
{
    //
    use LogsActivity;
    
    protected $table = 'systeminfos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function systemupdates(){
        return $this->belongsTo('App\Systemupdate');
    }
    protected static $logFillable = true;
}
