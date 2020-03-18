<?php

use App\Http\Controllers\StudentPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//uso namespace per specificare che tutte le callback hanno come "prefisso" nella route il valore di namespace
Route::namespace('Api')->group(function(){
    //uso la chiamata post perché non lo passo tramite l'uri
    Route::post('/students/genders', 'StudentPageController@Gender');
});
