<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spellafoodscores extends Model
{
    //


    protected $table='spellafoodscores';
    protected $id = 'id';
    protected $fillable = ['id' ,'username', 'scores', 'date' ];
    protected $dates = ['date'];
    public $timestamps = true;
    
}
