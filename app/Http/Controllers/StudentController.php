<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Housing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{
    public function housing()
    {   
        
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->get();
      
       return view('user.housing.index')->with('users',$users); //
    }
//
}
