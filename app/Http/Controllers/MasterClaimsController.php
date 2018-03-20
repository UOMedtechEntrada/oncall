<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterClaimsController extends Controller
{
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
     $claims = MasterClaim::all();
     return response()->json($claims);
 }
 * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $claim = new MasterClaim;

  $claim->username = Input::get('user_id');
  $claim->email = Input::get('claim_date');
  
  $claim->save();

  return Redirect::back();
  }
}
