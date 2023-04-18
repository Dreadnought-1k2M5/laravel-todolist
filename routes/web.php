<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [todoListController::class, 'index']);

//Generally you dont want to have your logic within the function here. Call a method from your controller php files
//and pass it to Route::post() as 2nd argument.
/* Route::post('saveItem', function(){
    return view('welcome');
})->name('saveItem'); */


Route::post('/saveItemRoute', [todoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markComplete/{id}', [todoListController::class, 'markItem'])->name("markComplete");