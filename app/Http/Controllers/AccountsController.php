<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon;
use Auth;
use Validator;
use App\User;
use App\Systemupdate;

class AccountsController extends Controller
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
    {   //
        $systemupdates = Systemupdate::all();
        $accounts = User::orderBy('created_at','desc')->paginate(10);
        return view('Accounts.index',compact('systemupdates'))->with('accounts', $accounts);
    }

    public function search(Request $request)
    {
        $systemupdates = Systemupdate::all();
        $search = $request->get('search');
        $accounts = User::where('id', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('usersrole', 'like', '%' . $search . '%')
                ->paginate(10);

                return view('Accounts.index', compact(['accounts','systemupdates']))->with('accounts', $accounts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Accounts.index');
    
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
           //required input
           $this->validate($request,[
            'email' => 'required|max:50',
            'name' =>  'required|max:50',
            'password' => 'required',
            'usersrole' => 'required',
        ]);         
        //create account
        $account =  User::create([
            'email' => request('email'),
            'name' => request('name'),
            'usersrole' => request('usersrole'),
            'password' => bcrypt(request('password'))
        ]);
      //  $account->email = $request->input('email');
     //$account->name= $request->input('name');
      //  $account->password = $request->input('password');
        //$account->password =  Hash::make($request->input('password'));
       // $account->userid = auth()->user()->id;
        return redirect('/accounts')->with('success', 'New Account has successfully created');
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
        $systemupdates = Systemupdate::all();
        $account = User::findOrFail($id);
        return view('Accounts.show',compact('systemupdates'))->with('accounts', $account);
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
        if(Auth::user()->usersrole == "superadmin"){

        $systemupdates = Systemupdate::all();
        $account = User::findOrFail($id);
        return view('Accounts.edit',compact('systemupdates'))->with('accounts', $account);
       
        }
        else {
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
           //required input
           $this->validate($request,[
            'email' => 'required',
            'name' =>  'required',
            'password' => 'required',
            'usersrole' => 'required',
        ]);         
        //update account
        $account = User::findOrFail($id);
        $account->email = $request->input('email');
        $account->name= $request->input('name');
        $account->usersrole = $request->input('usersrole');
        if(Hash::check($request->input('password'), $account->password
        )){
            $account->password = bcrypt($request->input('password'));

        }
        $account->save();

        return redirect('/accounts')->with('success', 'Account record has successfully updated');
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
        $account = User::findOrFail($id);
        $account->delete();
        return redirect('/accounts')->with('success','selected account has been removed');
    }
}
