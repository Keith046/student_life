<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tutoring;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor_session;


class TutorSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $current = auth()->user();
        $users = DB::table('tutor_sessions')
            ->join('users', 'tutor_sessions.student_id', '=', 'users.id')
            ->join('tutorings', 'tutor_sessions.tutoring_id', '=', 'tutorings.id')
            ->select('tutor_sessions.*','users.name','users.email','tutorings.*' )
            ->where('tutor_sessions.tutor_id', $current->id)
            ->get();
      
       return view('user.tutor.tutor_schedule')->with('users',$users);
        //
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
       $id = auth()->user()->id;
        
        $user = Tutor_session::create([
            
            'tutoring_id' => $request['id'],
            'student_id' => $id,
            'tutor_id' => $request['tutor_id']
        ]);
        
        
       
        $user->save();
        return view('user.tutor.index'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor_session  $tutor_session
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   $current = auth()->user();
        $users = DB::table('tutor_sessions')
            ->join('users', 'tutor_sessions.student_id', '=', 'users.id')
            ->join('tutorings', 'tutor_sessions.tutoring_id', '=', 'tutorings.id')
            ->select('tutor_sessions.*','users.name','users.email','tutorings.*' )
            ->where('tutor_sessions.student_id', $current->id)
            ->get();//
            return view('user.tutor.my_sessions')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor_session  $tutor_session
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor_session $tutor_session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutor_session  $tutor_session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutor_session $tutor_session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor_session  $tutor_session
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tutor_session::destroy($id);
        return redirect()->route('tutoring_session.index');//
    }
}
