<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StipendsController extends Controller
{
  public function index()
  { $sites = DB::table('mtd_sites')->get();
    return view('stipends.index', ['sites' => $sites]);
    
  }

}
