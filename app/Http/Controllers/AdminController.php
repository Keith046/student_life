<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:administrator');
    }
    public function index()
    {
        return view('admin.index');
    }

    public function search()
    {
        $searchtext= $_GET['query'];
        $arr['users']= User::where('name','LIKE', '%'.$searchtext.'%')->get();
        return view('admin.UserManagement.index')->with($arr);//
    }



}
