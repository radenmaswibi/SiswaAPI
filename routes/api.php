<?php

use App\Http\Controllers\SiswaContoller;
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

Route::get('/siswa',[SiswaContoller::class, 'index']);
Route::post('/siswa/create', [SiswaContoller::class, 'store']);
Route::get('/siswa/show/{id_siswa}', [SiswaContoller::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
