<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
 public function index()
 {
     $blocks = Block::all();
     return response()->json($blocks);
 }
 
}
