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

use Illuminate\Http\Request;
Route::get('/', 'HomeController@index')->name('home');

Route::get('/cadastrar', function () {
    $query = http_build_query([
        'client_id' => '3',
        'redirect_uri' => 'http://localhost:9999/callback',
        'response_type' => 'code',
        'scope' => ''
    ]);

    return redirect('http://localhost:8000/oauth/authorize?'.$query);
});

Route::get('callback', function(Request $request){
    $code = $request->get('code');
    $http = new \GuzzleHttp\Client();
    $response = $http->post('http://localhost:8000/oauth/token', [
        'form_params' => [
            'client_id' => '3',
            'client_secret' => 'jue9Gyoltbe84dFLmGlccqAbG80lW3qRaKCWkoJl',
            'redirect_uri' => 'http://localhost:9999/callback',
            'code' => $code,
            'grant_type' => 'authorization_code'
        ]
    ]);
    //return json_decode($response->getBody(), true);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

