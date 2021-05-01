<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutoring;


class TutoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current = auth()->user();
        $users = DB::table('tutorings')
            ->join('users', 'tutorings.tutor_id', '=', 'users.id')
            ->select('tutorings.*','users.name','users.email')
            ->where('tutorings.tutor_id','!=' , $current->id)
            ->get();
      
       return view('user.tutor.index')->with('users',$users);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('user.tutor.tutor_sign-up')->with('users',$user);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tutoring $user)
    {
        $id = auth()->user()->id;

        $user = Tutoring::create([
            
            'tutor_id' => $id,
            'phone' => $request['phone'],
            'course_name' => $request['course_name'],
            'faculty' => $request['faculty'],
            'time' => $request['time'],
            
            'course_id' => $request['course_id'],
           
        ]);
        
        
       
        $user->save();
        return redirect()->route('tutor.index'); //
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutoring  $tutoring
     * @return \Illuminate\Http\Response
     */
    public function show(Tutoring $tutoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutoring  $tutoring
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutoring $tutoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutoring  $tutoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutoring $tutoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutoring  $tutoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutoring $tutoring)
    {
        //
    }
}
