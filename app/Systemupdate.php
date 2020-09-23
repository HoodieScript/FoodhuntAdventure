<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class Systemupdate extends Model
{
    //
    use LogsActivity;

    
    protected $table = 'systemupdates';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id','systemname', 'uploadimage',
    ];
    protected static $logFillable = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
