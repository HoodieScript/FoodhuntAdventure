<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use App\Player;
use App\Systemupdate;
class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
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
        $players = Player::orderBy('id','desc')->paginate(10);
        return view('Player.index', compact('systemupdates'))
        ->with('players', $players);
    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $players = Player::where('id', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
                ->orWhere('gender', 'like', '%' . $search . '%')
                ->orWhere('age', 'like', '%' . $search . '%')
                ->paginate(10);

              //  return view('Player.index', compact(['players','systemupdates']))->with('players', $players);
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
        /*
         $players = Players::find($id)
        ->leftJoin('scores', 'players.name', '=', 'scores.name')
        ->where('players.id' , '=', $id)
        ->get();

        return view('Players.show')->with('players', $players);
        */
        
        $personalinfo = Player::findOrFail($id)->first();

        $systemupdates = Systemupdate::all();
        $players = Player::findOrFail($id)
        ->leftJoin('stageprogresses', 'players.username', '=', 'stageprogresses.username')
        ->leftJoin('spellafoodscores', 'players.username', '=', 'spellafoodscores.username')
        ->leftJoin('fooddropscores', 'players.username', '=', 'fooddropscores.usern')
        ->where('players.id' , '=', $id)
        ->get(); 


        return view('Player.show', compact('personalinfo', 'systemupdates'  ))
        
        ->with('players', $players);

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
}
