<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/* Laravel ui auth routes
-------------------------------------------------------------------------- */
Auth::routes([ 
    'register' => false 
]);

/* Home route
-------------------------------------------------------------------------- */
Route::middleware('auth')->group(function() {
    Route::get('/', [ PageController::class, 'home']);
});