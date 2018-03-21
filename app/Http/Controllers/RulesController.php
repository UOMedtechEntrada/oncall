<?php

namespace App\Http\Controllers;

use App\Rules;
use Illuminate\Http\Request;

class RulesController extends Controller
{
 public function index()
 {
     $rules = Rules::all();
     return response()->json($rules);
 }

}
