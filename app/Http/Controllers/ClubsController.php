<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $users = DB::table('clubs')
            
            ->select('clubs.*')
            
            ->get();
            
            if($user->hasRole('user')){
                return view('user.clubs.index')->with('users',$users); 
            }
            if($user->hasRole('admin')){
                return view('admin.club.index')->with('users',$users); 
            }
      
         //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.club.club_sign-up');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Clubs $clubs)
    {
        $clubs = Clubs::create([
            
        
            'phone' => $request['phone'],
            'club_name' => $request['club_name'],
            'faculty' => $request['faculty'],
            
        ]);
        
        
       
        $clubs->save();
        return redirect()->route('clubs.index');//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clubs  $clubs
     * @return \Illuminate\Http\Response
     */
    public function show(Clubs $clubs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clubs  $clubs
     * @return \Illuminate\Http\Response
     */
    public function edit(Clubs $clubs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clubs  $clubs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clubs $clubs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clubs  $clubs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clubs $clubs)
    {
        User::destroy($clubs);
        return redirect()->route('clubs.index');   //
    }
}
