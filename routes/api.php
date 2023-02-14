<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Categories;
use App\Http\Controllers\API\CategoryController;

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

// Route::group(['prefix'=>'category'],function(){
//     Route::get('/',[CategoryController::class,'all']);
//     // Route::get('{id}',[CategoryController::class,'findByID']);
//     // Route::post('/create',[CategoryController::class,'create']);
// });

Route::resource('categories', CategoryController::class);
// Route::get('category/{id}',[CategoryController::class],'findByID');

