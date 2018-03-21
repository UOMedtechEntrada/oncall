<?php

namespace App\Http\Controllers;
use App\Block;
use App\ClaimType;
use App\FundingCodes;
use App\MasterClaims;
use App\MtdService;
use App\MtdSites;
use Illuminate\Http\Request;

class StipendsController extends Controller
{
  public function index()
  { $sites = DB::table('mtd_sites')->get();
    return view('stipends.index', ['sites' => $sites]);
    
  }

}
