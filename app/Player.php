<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //



    protected $table = 'players';
    protected $primaryKey = 'id';

    protected $fillable = [ 'username', 'password', 'age', 'squestion', 'sanswer','selectedCharacter','energy','hash','score','stagelevel','spellafoodscore','salt' ];
    
}
