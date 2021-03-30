<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('administrator')){
            return view ('admin.profile.view')->with('users',$user);
            }
            
            if($user->hasRole('user')){
                return view ('user.profile.view')->with('users',$user);
            }
            if($user->hasRole('landlord')){
                return view ('landlord.profile.view')->with('users',$user);
            }
            if($user->hasRole('vendors')){
                return view('vendor.profile.view')->with('users',$user);
            }
        
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
    public function edit($user)
    {
        $user = auth()->user();
       
        if($user->hasRole('administrator')){
            return view('admin.profile.updateprofile',compact('user'));
            }
            
            if($user->hasRole('user')){
                return view('user.profile.updateprofile',compact('user'));
            }
            if($user->hasRole('landlord')){
                return view('landlord.profile.updateprofile',compact('user'));
            }
            if($user->hasRole('vendors')){
                return view('vendor.profile.updateprofile',compact('user'));
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $user = auth()->user();
         
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request['password']);
        
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        $user->save();
        return redirect()->route('profile.index');//
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
