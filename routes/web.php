<?php

use App\Http\Controllers\ListingController;
use Faker\Provider\Lorem;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use function Ramsey\Uuid\v1;

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

// All Listings
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store']);
// Single Llisting
Route::get('/listings/{listing}', [ListingController::class, 'show']);












// Route::get('/hello', function(){
//     return response('<h1>Hello</h1>', 200);
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

