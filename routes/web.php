<?php

use App\Http\Controllers\Admin\AdvokasiController;
use App\Http\Controllers\Admin\BreakingNewsController;
use App\Http\Controllers\Admin\CreationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VokasiStoreController;
use App\Http\Controllers\Admin\VokasiStoreGalleryController;
use App\Http\Controllers\Frontend\AdvokasiController as FrontendAdvokasiController;
use App\Http\Controllers\Frontend\BemController;
use App\Http\Controllers\Frontend\BreakingNewsController as FrontendBreakingNewsController;
use App\Http\Controllers\Frontend\CreationController as FrontendCreationController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MedpartController;
use App\Http\Controllers\Frontend\VokasiStoreController as FrontendVokasiStoreController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/bem-fit', [BemController::class, 'index'])->name('bem-fit');
Route::get('/advokasi', [FrontendAdvokasiController::class, 'index'])->name('advokasi');
Route::post('/advokasi', [FrontendAdvokasiController::class, 'store'])->name('advokasi-store');
Route::get('/creation', [FrontendCreationController::class, 'index'])->name('creation');
Route::get('/creation/{id}', [FrontendCreationController::class, 'index'])->name('creation-detail');
Route::get('/medpart', [MedpartController::class, 'index'])->name('medpart');
Route::get('/news', [FrontendBreakingNewsController::class, 'index'])->name('news');
Route::get('/vokasi-store', [FrontendVokasiStoreController::class, 'index'])->name('vokasi-store');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::middleware(['auth', 'admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('vokasi-store', VokasiStoreController::class);
            Route::resource('vokasi-store-gallery', VokasiStoreGalleryController::class);
            Route::resource('advokasi', AdvokasiController::class);
            Route::resource('department', DepartmentController::class);
            Route::resource('creation', CreationController::class);
            Route::resource('breaking-news', BreakingNewsController::class);
            Route::resource('profile', ProfileController::class);
            Route::resource('user', UserController::class);
        });
    });
});

require __DIR__.'/auth.php';
