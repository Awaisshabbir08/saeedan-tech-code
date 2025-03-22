<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\NoteController;

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


// User Routes
Route::post('/create-seller', [UserController::class, 'createSeller']);
Route::post('/create-buyer', [UserController::class, 'createBuyer']);

// Deal Routes
Route::post('/create-deal', [DealController::class, 'createDeal']);
Route::get('/seller-deals/{sellerId}', [DealController::class, 'getSellerDeals']);
Route::get('/buyer-deals/{buyerId}', [DealController::class, 'getBuyerDeals']);

// Note Routes
Route::post('/create-note', [NoteController::class, 'createNote']);
Route::get('/seller-notes/{sellerId}', [NoteController::class, 'getSellerNotes']);
