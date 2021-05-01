<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $users = DB::table('transportations')
            ->select('transportations.*')
            ->get();
            
            if($user->hasRole('user')){
                return view('user.transportation.index')->with('users',$users); 
            }
            if($user->hasRole('admin')){
                return view('admin.transportation.index')->with('users',$users); 
            }  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transportation.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Transportation $transportation)
    {
        $transportation = Transportation::create([
            
         
            'semester' => $request['semester'],
            'day' => $request['day'],
            'time' => $request['time'],
            'location' => $request['location'],
            
           
        ]);
        
        
       
        $transportation->save();
        return redirect()->route('transportation.index');//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function show(Transportation $transportation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function edit(Transportation $transportation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transportation $transportation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transportation  $transportation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transportation $transportation)
    {
        //
    }
}
