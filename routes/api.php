<?php
namespace App;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Pierre\Trustpackage\Http\middleware\RequestHeader;
use App\Http\Controllers\Api\AppController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('trustapp', AppController::class);

// ->middleware(RequestHeader::class)