<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:landlord');
    }
    public function index()
    {
        return view('landlord.index');
    }

    //
}
