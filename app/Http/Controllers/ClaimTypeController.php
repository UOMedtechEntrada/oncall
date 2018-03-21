<?php

namespace App\Http\Controllers;

use App\ClaimType;
use Illuminate\Http\Request;

class ClaimTypeController extends Controller
{
 public function index()
 {
     $claimTypes = ClaimType::all();
     return response()->json($claimTypes);
 }
}
