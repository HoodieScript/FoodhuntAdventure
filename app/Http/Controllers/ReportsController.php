<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Stageprogress;
use App\Fooddropscores;
use DB;
use App\Systemupdate;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $systemupdates = Systemupdate::all();

        $totalAccounts = DB::table('users')->count();
        $totalPlayers = DB::table('players')->count();

        //foodhunt age based
        $scorespercentage3 =  DB::table('stageprogresses')
        ->select(DB::raw('avg(stageprogresses.kit + stageprogresses.back + stageprogresses.gro + stageprogresses.mar)/4 as average'))
        ->leftJoin('players' , 'players.username', '=', 'stageprogresses.username')
        ->groupBy("players.age")
        ->get()->toArray();
         $scorespercentage3 = array_column($scorespercentage3, 'average');

        $viewer3 =  DB::table('stageprogresses')
        ->select(DB::raw('players.age as age'))
        ->leftJoin('players' , 'players.username', '=','stageprogresses.username')
        ->groupBy("players.age")
        ->get()->toArray();
         $viewer3 = array_column($viewer3, 'age');
         

        //fooddrop age based
        $scorespercentage =  DB::table('fooddropscores')
        ->select(DB::raw('avg(fooddropscores.fdscore) as average'))
        ->leftJoin('players' , 'players.username', '=', 'fooddropscores.usern')
        ->groupBy("players.age")
        ->get()->toArray();
         $scorespercentage = array_column($scorespercentage, 'average');

        $viewer2 =  DB::table('fooddropscores')
        ->select(DB::raw('players.age as age'))
        ->leftJoin('players' , 'players.username', '=','fooddropscores.usern')
        ->groupBy("players.age")
        ->get()->toArray();
         $viewer2 = array_column($viewer2, 'age');

        //spellafood age based
        $scorespercentage4 =  DB::table('spellafoodscores')
        ->select(DB::raw('avg(spellafoodscores.score) as average'))
        ->leftJoin('players' , 'players.username', '=', 'spellafoodscores.username')
        ->groupBy("players.age")
        ->get()->toArray();
         $scorespercentage4 = array_column($scorespercentage4, 'average');

        $viewer4 =  DB::table('spellafoodscores')
        ->select(DB::raw('players.age as age'))
        ->leftJoin('players' , 'players.username', '=','spellafoodscores.username')
        ->groupBy("players.age")
        ->get()->toArray();
         $viewer4 = array_column($viewer4, 'age');

         //foodhunt location based
        $scorespercentage7 =  DB::table('stageprogresses')
        ->select(DB::raw('avg(stageprogresses.kit + stageprogresses.back + stageprogresses.gro + stageprogresses.mar)/4 as average'))
        ->leftJoin('players' , 'players.username', '=', 'stageprogresses.username')
        ->groupBy("players.location")
        ->get()->toArray();
         $scorespercentage7 = array_column($scorespercentage7, 'average');

        $viewer7 =  DB::table('stageprogresses')
        ->select(DB::raw('players.location as location'))
        ->leftJoin('players' , 'players.username', '=','stageprogresses.username')
        ->groupBy("players.location")
        ->get()->toArray();
         $viewer7 = array_column($viewer7, 'location');

        //fooddrop location based
        $scorespercentage5 =  DB::table('fooddropscores')
        ->select(DB::raw('avg(fooddropscores.fdscore) as average'))
        ->leftJoin('players' , 'players.username', '=', 'fooddropscores.usern')
        ->groupBy("players.location")
        ->get()->toArray();
         $scorespercentage5 = array_column($scorespercentage5, 'average');

        $viewer5 =  DB::table('fooddropscores')
        ->select(DB::raw('players.location as location'))
        ->leftJoin('players' , 'players.username', '=','fooddropscores.usern')
        ->groupBy("players.location")
        ->get()->toArray();
         $viewer5 = array_column($viewer5, 'location');

         //spellafood location based
        $scorespercentage6 =  DB::table('spellafoodscores')
        ->select(DB::raw('avg(spellafoodscores.score) as average'))
        ->leftJoin('players' , 'players.username', '=', 'spellafoodscores.username')
        ->groupBy("players.location")
        ->get()->toArray();
         $scorespercentage6 = array_column($scorespercentage6, 'average');

        $viewer6 =  DB::table('spellafoodscores')
        ->select(DB::raw('players.location as location'))
        ->leftJoin('players' , 'players.username', '=','spellafoodscores.username')
        ->groupBy("players.location")
        ->get()->toArray();
         $viewer6 = array_column($viewer6, 'location');

         //bar graph
        $ages = DB::table('players')
        ->select(DB::raw("players.age as ages"))
        ->where('age', '>', 0)
        ->orderBy("age")
        ->groupBy(DB::raw("age"))
        ->get()->toArray();
         $ages = array_column($ages, 'ages');


        $viewer =  DB::table('players')
        ->where('age', '>', 0)
        ->select(DB::raw("count(age) as count"))
        ->orderBy("age")
        ->groupBy(DB::raw("age"))
        ->get()->toArray();
         $viewer = array_column($viewer, 'count');
    
    

    return view('Reports.index', compact(['systemupdates']))     
            ->with('totalAccounts', $totalAccounts)
            ->with('totalPlayers', $totalPlayers)
            ->with('scorespercentage3' ,json_encode($scorespercentage3,JSON_NUMERIC_CHECK))
            ->with('viewer3' ,json_encode($viewer3,JSON_NUMERIC_CHECK))
            ->with('scorespercentage' ,json_encode($scorespercentage,JSON_NUMERIC_CHECK))
            ->with('viewer2' ,json_encode($viewer2,JSON_NUMERIC_CHECK))
            ->with('scorespercentage4' ,json_encode($scorespercentage4,JSON_NUMERIC_CHECK))
            ->with('viewer4' ,json_encode($viewer4,JSON_NUMERIC_CHECK))
            ->with('scorespercentage7' ,json_encode($scorespercentage7,JSON_NUMERIC_CHECK))
            ->with('viewer7' ,json_encode($viewer7,JSON_NUMERIC_CHECK))
            ->with('scorespercentage5' ,json_encode($scorespercentage5,JSON_NUMERIC_CHECK))
            ->with('viewer5' ,json_encode($viewer5,JSON_NUMERIC_CHECK))
            ->with('scorespercentage6' ,json_encode($scorespercentage6,JSON_NUMERIC_CHECK))
            ->with('viewer6' ,json_encode($viewer6,JSON_NUMERIC_CHECK))
            ->with('ages' ,json_encode($ages,JSON_NUMERIC_CHECK))
            ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function area()
    {
    
      

    
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function chartjs()
{
  
}
}
