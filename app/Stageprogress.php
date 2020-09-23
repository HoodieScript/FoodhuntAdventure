<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stageprogress extends Model
{
    //
    protected $table = 'stageprogresses';
    
    protected $primaryKey = 'id';

    protected $fillable = ['id','username','kit','back','gro','mar','date'];
    
    protected $dates = ['date'];

    public $timestamps = true;


}
