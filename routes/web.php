<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FetchlinkController;

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
    return view('welcome');
});

Route::get('/fetch', function() {
    return $data = OpenGraph::fetch("https://www.cars.com/vehicledetail/af7ac71a-9a63-4779-a3d9-15d893d909cc/", true);
});

Route::get('/fetchlink', [FetchlinkController::class, 'fetchlink']);

Route::get('link/{key}', [FetchlinkController::class, 'link']);

