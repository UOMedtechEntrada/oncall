<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('stipends');
});
Route::get('list', function () {
    return view('claim-list');
});
Route::get('admin', function () {
    return view('admin-portal');
});
Route::get('login', function () {
    return view('login');
});
Route::get('stipends', function () {
    return view('stipends');
  });
Route::get('landing', function () {
    return view('landing');
  });

Route::resource('api/blocks', 'BlockController');
Route::resource('api/master_claims', 'MasterClaimsController');
Route::resource('api/claim_type', 'ClaimTypeController');
Route::resource('api/mtd_services', 'MtdServiceController');
Route::resource('api/mtd_sites', 'MtdSitesController');
Route::resource('api/funding_codes', 'FundingCodesController');
Route::resource('api/rules', 'RulesController');


