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
Route::get('/list/{spl_id}', [FrontendController::class, 'list']);
Route::get('/detail-page/{id}', [FrontendController::class, 'detail_page']);
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


Route::get('/add-specialist', [AdminController::class, 'add_specialist']);
Route::post('/save-specialist', [AdminController::class, 'save_specialist']);
Route::get('/manage-specialist', [AdminController::class, 'manage_specialist']);
Route::get('/edit-specialist/{id}', [AdminController::class, 'edit_spl']);
Route::post('/update-specialist', [AdminController::class, 'update_specialist']);
Route::get('/delete-specialist/{id}', [AdminController::class, 'delete_specialist']);


Route::get('/add-clinic', [AdminController::class, 'add_clinic']);
Route::post('/save-clinic', [AdminController::class, 'save_clinic']);
Route::get('/manage-clinic', [AdminController::class, 'manage_clinic']);
Route::get('/edit-clinic/{id}', [AdminController::class, 'edit_clinic']);
Route::post('/update-clinic', [AdminController::class, 'update_clinic']);
Route::get('/delete-clinic/{id}', [AdminController::class, 'delete_clinic']);
Route::get('/manage-dr', [AdminController::class, 'manage_dr']);

Route::get('/add-dr', [AdminController::class, 'add_dr']);
Route::post('/save-dr', [AdminController::class, 'save_dr']);