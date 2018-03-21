<?php

namespace App\Http\Controllers;

use App\MtdSites;
use Illuminate\Http\Request;

class MtdSitesController extends Controller
{
 public function index()
 {
     $mtdSites = MtdSites::all();
     return response()->json($mtdSites);
 }
}
