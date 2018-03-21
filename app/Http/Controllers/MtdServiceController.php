<?php

namespace App\Http\Controllers;

use App\MtdService;
use Illuminate\Http\Request;

class MtdServiceController extends Controller
{
 public function index()
 {
     $mtdServices = MtdService::all();
     return response()->json($mtdServices);
 }
}
