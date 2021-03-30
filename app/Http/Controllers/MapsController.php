<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Housing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapsController extends Controller
{
    public function index()
    {   
        $current = auth()->user();
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('housings.landlord_id', $current->id)
            ->get();
      
       return view('landlord.apartments')->with('users',$users); //
    }
    public function housing_map()
    {   
        $current = auth()->user();
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('housings.landlord_id', $current->id)
            ->get();
      
       return view('user.housing.apartments')->with('users',$users); //
    }//
    public function vendor_map()
    {   
        $current = auth()->user();
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('housings.landlord_id', $current->id)
            ->get();
      
       return view('user.vendors.vendor_map')->with('users',$users); //
    }//
    public function mapMarker()
    { 
        $current = auth()->user();
        $locations = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('housings.landlord_id', $current->id)
            ->get();
        $map_markes = array ();
        foreach ($locations as $key => $location) { 
            $map_markes[] = (object)array(
                
                'address' =>$location->addressline1,
                'latitude' => $location->coords_lat,
                'longitude' => $location->coords_lng,
                'status' => $location->status,
                'email' => $location->email
               
            );
        }
        return response()->json($map_markes);
    }
}
