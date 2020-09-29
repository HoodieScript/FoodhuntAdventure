<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;   
use App\Stageprogress;
use App\Systemupdate;
class StageprogressController extends Controller
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
        $foodhunt = Stageprogress::orderBy('id','created_at')->paginate(10);

        $multipledata = [
            'systemupdates' => $systemupdates,
             'foodhunt' => $foodhunt
        ];
        return view('Stagelevel.index')->with($multipledata);

    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $foodhunt = Stageprogress::where('id', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
                ->orWhere('kit', 'like', '%' . $search . '%')
                ->orWhere('back', 'like', '%' . $search . '%')
                ->orWhere('gro', 'like', '%' . $search . '%')
                ->orWhere('mar', 'like', '%' . $search . '%')
                ->paginate(10);

                $multipledata = [
                    'systemupdates' => $systemupdates,
                     'foodhunt' => $foodhunt
                ];
                return view('Stagelevel.index')->with($multipledata);
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
