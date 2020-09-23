<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitylog;
use App\Systemupdate;
use Auth;
class ActivitylogsController extends Controller
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
        $activitylogs = Activitylog::orderBy('id','desc')->paginate(10);

        return view('Activitylog.index',compact('systemupdates'))->with('activitylogs', $activitylogs);
    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $activitylogs = Activitylog::where('id', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('subject_id', 'like', '%' . $search . '%')
                ->orWhere('subject_type', 'like', '%' . $search . '%')
                ->orWhere('causer_id', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%')
                ->paginate(10);

                return view('Activitylog.index', compact(['activitylogs','systemupdates']))->with('activitylogs', $activitylogs);
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
