<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:vendors');
    }
    public function index()
    {
        return view('vendor.index');
    }
//
}
