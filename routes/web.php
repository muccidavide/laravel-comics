<?php

use Illuminate\Support\Facades\Route;

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
    $comics = config('db.comics');
    $banner = config('db.banner');
   
    
    return view('comics', compact('comics','banner'));
})->name('comics');


Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    $banner = config('db.banner');

    if ($id >= 0 && is_numeric($id) && $id < count($comics)){

        $comic = $comics[$id];
        return view ('comics.show', compact('comic'));

        dd($comic);

    }else{
        abort(404);
    }
   
    
    
    return view('comics', compact('comic','banner'));
})->name('comics.show');
