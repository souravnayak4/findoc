<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/
 
Route::get('/', [FrontendController::class, 'index']);
Route::get('/list', [FrontendController::class, 'list']);
Route::get('/detail-page', [FrontendController::class, 'detail_page']);
Route::get('/booking', [FrontendController::class, 'booking']);
Route::get('/confirm', [FrontendController::class, 'confirm']);

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/messages', [AdminController::class, 'messages']);
Route::get('/book', [AdminController::class, 'book']);
Route::get('/reviews', [AdminController::class, 'reviews']);
Route::get('/bookmarks', [AdminController::class, 'bookmarkS']);
Route::get('/add-listing', [AdminController::class, 'add_listing']);
Route::get('/user-profile', [AdminController::class, 'user_profile']);
Route::get('/doctor-profile', [AdminController::class, 'doctor_profile']);
Route::get('/tables', [AdminController::class, 'tables']);
Route::get('/charts', [AdminController::class, 'charts']);


Route::get('/add-area', [AdminController::class, 'add_area']);
Route::post('/save-area', [AdminController::class, 'save_area']);
Route::get('/manage-area', [AdminController::class, 'manage_area']);
Route::get('/edit-area/{id}', [AdminController::class, 'edit_area']);
Route::post('/update-area', [AdminController::class, 'update_area']);
Route::get('/delete-area/{id}', [AdminController::class, 'delete_area']);

Route::get('/add-clinic', [AdminController::class, 'add_clinic']);

Route::get('/add-specialist', [AdminController::class, 'add_specialist']);
Route::post('/save-specialist', [AdminController::class, 'save_specialist']);







