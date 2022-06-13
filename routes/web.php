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
    
    return redirect('comics');
})->name('home');


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

Route::get('/characters', function () {   
    
    return view('characters');
})->name('characters');

/* Double comics as homepage and comics page */

Route::get('/comics', function () {   
    $comics = config('db.comics');
    $banner = config('db.banner');
   
    
    return view('comics.index', compact('comics','banner'));
})->name('comics');

Route::get('/movies', function () {   
    
    return "movies page here";
})->name('movies');

Route::get('/tv', function () {   
    
    return "tv page here";
})->name('tv');

Route::get('/games', function () {   
    
    return "games page here";
})->name('games');

Route::get('/collectibles', function () {   
    
    return "collectibles page here";
})->name('collectibles');

Route::get('/videos', function () {   
    
    return "videos page here";
})->name('videos');

Route::get('/fans', function () {   
    
    return "fans page here";
})->name('fans');

Route::get('/news', function () {   
    
    return "news page here";
})->name('news');

Route::get('/shop', function () {   
    
    return "shop page here";
})->name('shop');



