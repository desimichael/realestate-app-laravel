<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your \Application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'is_admin'],
    'as' => 'admin.'
], function() {

    // Dashboard
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');


    // Listings; associated array
    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
], function() {
    // Now have controller
    Route::get('/',[\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');
    
    Route::get('/create',[\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');

    Route::post('/',[\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');

    Route::get('/{slug}/{id}/edit',[\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');

    Route::put('/{slug}/{id}',[\App\Http\Controllers\Admin\ListingController::class, 'update'])->name('update');

    Route::get('/{slug}/{id}/delete',[\App\Http\Controllers\Admin\ListingController::class, 'delete'])->name('delete');

    // Start of Listing Photos Section
    Route::get('/{slug}/{id}/photos',[\App\Http\Controllers\Admin\PhotoController::class, 'index'])->name('photos');

    Route::get('/{slug}/{id}/photos/create',[\App\Http\Controllers\Admin\PhotoController::class, 'create'])->name('photos.create');

    Route::post('/{slug}/{id}/photos',[\App\Http\Controllers\Admin\PhotoController::class, 'store'])->name('photos.store');

    Route::get('/{slug}/{id}/photos/{photo_id}/delete',[\App\Http\Controllers\Admin\PhotoController::class, 'destroy'])->name('photos.delete');

    Route::get('/{slug}/{id}/photos/{photo_id}/featured',[\App\Http\Controllers\Admin\PhotoController::class, 'featured'])->name('photos.featured');

   });
});




// Home Page
Route::get('/', function () {
    return view('pages/home');
});

// Single Listing
Route::get('/listing/{slug}/{id}/', function () {
    return view('pages/single-listing');
});

// Show All Listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
})->name('listings');

// // User Login
// Route::get('/login', function () {
//     return view('pages/login');
// });
// // User Register
// Route::get('/register', function () {
//     return view('pages/register');
// });

// User Saved Listings
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// User Show Status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');



// User Authentication
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
