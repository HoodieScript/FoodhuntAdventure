<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Systeminfo;
use App\Systemupdate;
use Auth;

class SysteminfosController extends Controller
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
        $systeminfos = Systeminfo::orderBy('created_at','desc')->paginate(4);
        return view('Systeminfo.index',compact(['systeminfos','systemupdates']));
       

    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $systeminfos = Systeminfo::where('id', 'like', '%' . $search . '%')
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
                ->paginate(10);

                return view('Systeminfo.index', compact(['systeminfos','systemupdates']))->with('systeminfos', $systeminfos);
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);

        $systeminfos = new Systeminfo;
        $systeminfos->title = $request->input('title');
        $systeminfos->body = $request->input('body');
        $systeminfos->save();

        return redirect('/systeminfos')->with('sucsess', 'successfully created a content');
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
        if(Auth::user()->usersrole == "superadmin"){
        $systemupdates = Systemupdate::all();
        $systeminfos = Systeminfo::findOrFail($id);
        return view('Systeminfo.show',compact('systemupdates'))->with('systeminfos',$systeminfos);
        }
        else{
            return view('layouts.404');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if(Auth::user()->usersrole == "superadmin"){
            $systemupdates = Systemupdate::all();
            $systeminfos = Systeminfo::findOrFail($id);

            return view('Systeminfo.edit',compact('systemupdates'))->with('systeminfos',$systeminfos);
        }
            else{
                return view('layouts.404');
            }
            
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
        $systeminfos = Systeminfo::findOrFail($id);
        $systeminfos->title = $request->input('title');
        $systeminfos->body = $request->input('body');
        $systeminfos->save();

        return redirect('/systeminfos')->with('success', 'successfully updated a content');
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
        
        $systeminfo = Systeminfo::findOrFail($id);
        $systeminfo->delete();
        return redirect('/systeminfos')->with('success','selected content has been removed');
        
    }
}
