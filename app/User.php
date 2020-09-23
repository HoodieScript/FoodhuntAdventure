<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;


class User extends Authenticatable
{
    use Notifiable , LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'User';
    protected $table = 'users';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name', 'email', 'password','usersrole',
    ];
    protected static $logFillable = true;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function systeminfo(){
        return $this->belongsTo('App\Systeminfo');
    }
    public function systemupdates(){
        return $this->belongsTo('App\Systemupdate');
    }
    public function reports(){
        return $this->belongsTo('App\Reports');
    }
}
   