<?php

namespace App\Http\Controllers;

use App\FundingCodes;
use Illuminate\Http\Request;

class FundingCodesController extends Controller
{
    public function index()
	 {
	     $fundingCodes = FundingCodes::all();
	     return response()->json($fundingCodes);
	 }
}
