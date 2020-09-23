<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fooddropscores extends Model
{
    //
    protected $table = 'fooddropscores';
    protected $primaryKey = 'id';
    protected $fillable = ['id','username','score','date'];
    protected $dates = ['datefd'];
    public $timestamps = true;
}
