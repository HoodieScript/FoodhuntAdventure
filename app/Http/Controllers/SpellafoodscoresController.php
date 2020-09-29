<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Spellafoodscores;
use App\Systemupdate;
class SpellafoodscoresController extends Controller
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
        //
        $systemupdates = Systemupdate::all();
        $spellafoods = Spellafoodscores::orderBy('score','desc')->paginate(10);

        return view('Spellafood.index',compact('systemupdates'))->with('spellafoods', $spellafoods);

    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $spellafoods = Spellafoodscores::where('id', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
               // ->orWhere('score', 'like', '%' . $search . '%')
              //  ->orWhere('date', 'like', '%' . $search . '%')
                ->paginate(10);

                return view('Spellafood.index', compact('systemupdates'))->with('spellafoods', $spellafoods);
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
}
