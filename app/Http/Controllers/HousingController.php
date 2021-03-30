<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Housing;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 
class HousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $current = auth()->user();
        $users = DB::table('housings')
            ->join('users', 'housings.landlord_id', '=', 'users.id')
            ->select('housings.*','users.name','users.email')
            ->where('housings.landlord_id', $current->id)
            ->get();
      
       return view('landlord.RentManagement.index')->with('users',$users); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $user = auth()->user();
        return view('landlord.RentManagement.create')->with('users',$user);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Housing $user)
    {   
        $id = auth()->user()->id;

        $user = Housing::create([
            
            'landlord_id' => $id,
            'phone' => $request['phone'],
            'apartment_name' => $request['apartment_name'],
            'address' => $request['address'],
            'price' => $request['price'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'status' => $request['status'],
           
        ]);
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            $id->update(['image'=>$filename]);
        }
       
        $user->save();
        return redirect()->route('apartments.index');
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id= Housing::find($id);
        $user = auth()->user();
            if($user->hasRole('user')){
                return view('user.housing.more_info',compact('id'));
            }
            if($user->hasRole('landlord')){
                return view('landlord.RentManagement.more_info',compact('id'));
            }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id= Housing::find($id);
        return view('landlord.RentManagement.update',compact('id'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id= Housing::find($id);
         
        $id->apartment_name=$request->apartment_name;
        $id->phone=$request->phone;
        $id->status=$request->status;
        $id->price=$request->price;
        $id->address=$request->address;
        
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            $id->update(['image'=>$filename]);
        }
        $id->save();
        return redirect()->route('apartments.index');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Housing::destroy($id);
        return redirect()->route('apartments.index');
    }
}
