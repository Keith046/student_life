<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    //$current = auth()->user();
        $select = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*','role_user.role_id','roles.description')
            ->get();



         /** $select = DB::select('SELECT users.id, users.name,users.email, roles.description AS status
        * FROM ((users
        * INNER JOIN role_user ON users.id = role_user.user_id)
        * INNER JOIN roles ON role_user.role_id = roles.id)'); */
        return view ('admin.UserManagement.index')->with('users',$select);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.UserManagement.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
       
        $user->attachRole($request['role']);
        $user->save();
        return redirect()->route('accounts.index');
    }  
    
   /* public function show($id)
    {
      
    }
    */
    public function edit($user)
    {
        $user= User::find($user);
        return view('admin.UserManagement.edit',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user )
    {   
        $user=User::find($user);
         
        $user->name=$request->name;
        $user->email=$request->email;
       // $user->password=Hash::make($request['password']);
       
        $user->save();
        return redirect()->route('accounts.index'); //
    }

    public function update_password(Request $request, $user )
    {   
        $user=User::find($user);
         
    
        $user->password=Hash::make($request['password']);
       
        $user->save();
        return redirect()->route('accounts.index'); //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('accounts.index'); //
    }

   

}
