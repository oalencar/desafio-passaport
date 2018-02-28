<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function() {

    Route::post('cadastrar', ['uses' => 'API\\UserController@store'])->name('user.store');

    Route::get('agenda/{id}', ['uses' => 'API\\AgendaController@show'])->name('agenda.show');


    //Route::post('cadastrar', ['uses' => 'API\UserController@store'])->name('user.cadastrar');

});
