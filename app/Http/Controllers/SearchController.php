<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Housing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_user()
    {
        $searchtext= $_GET['query'];
               
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.id','users.name','users.email','roles.display_name')
            ->where('users.name','LIKE', '%'.$searchtext.'%')->get();
        return view('admin.UserManagement.index')->with('users',$users);//
    }
    public function search_housing()
    {
        $searchtext= $_GET['query'];
      
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('name','LIKE', '%'.$searchtext.'%')->get();
      
       return view('user.housing.index')->with('users',$users); 
    }

    public function sort_housing()
    {
        $sort= $_GET['query'];
      
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('status','LIKE', '%'.$sort.'%')->get();
      
       return view('user.housing.index')->with('users',$users); 
    }
    public function sort_user()
    {
        $sort= $_GET['query'];
               
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*','role_user.role_id','roles.description')
            ->where('role_user.role_id','LIKE', '%'.$sort.'%')->get();
        return view('admin.UserManagement.index')->with('users',$users);
    }
}
