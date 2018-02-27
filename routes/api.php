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

//Route::middleware('api')->get('/cadastrar', function (Request $request) {
//    $query = http_build_query([
//        'client_id' => '3',
//        'redirect_uri' => 'http://localhost:9999/callback',
//        'response_type' => 'code',
//        'scope' => ''
//    ]);
//
//    return redirect('http://localhost:8000/oauth/authorize?'.$query);
//});
//
//Route::middleware('api')->get('/callback', function(Request $request){
//    $code = $request->get('code');
//    $http = new \GuzzleHttp\Client();
//    $response = $http->post('http://localhost:8000/oauth/token', [
//        'form_params' => [
//            'client_id' => '3',
//            'client_secret' => 'jue9Gyoltbe84dFLmGlccqAbG80lW3qRaKCWkoJl',
//            'redirect_uri' => 'http://localhost:9999/callback',
//            'code' => $code,
//            'grant_type' => 'authorization_code'
//        ]
//    ]);
//    dd(json_decode($response->getBody(), true));
//});
