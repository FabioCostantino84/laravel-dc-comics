<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\ComicsController;

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

/* Route::get('/', [PageController::class, 'index'])->name('home'); */

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('comics', [PageController::class, 'comics'])->name('guests.comics');

Route::get('/', function(){
    return view('admin.index');
});


Route::resource('admin/comics', ComicsController::class);


/* Route::get('/comics', function () {
    $comics = \App\Models\Comics::all();
    return view('comics', compact('comics'));
}); */
