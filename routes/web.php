<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Models\Listing;
use Faker\Provider\Lorem;

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

//All Listings
Route::get('/', function(){
    return view('listing',[
        'heading' => 'Latest listing',
        'listings' => Listing::all()
    ]);
});

//Singe listing
Route::get('/list/{id}', function($id){
    return view ('list',[
        'listings' => Listing::find($id)
    ]);
});

Route::get('/about', [PagesController::class , 'about']);

// Route::get('/search', [PagesController::class, 'search'])->name('all');
// Route::get('/search', function($heading){
//         return view ('pages.search', [
//             $heading => Listings::class
//         ]);
//     }
// );