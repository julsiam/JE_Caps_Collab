<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\TenantController;

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

Route::get('/', function () {
    return view('./auth/login');
});



Auth::routes([
    'verify' => true
]);

// Tenants Routes

Route::middleware(['auth', 'user-access:tenant'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('tenants.home')->middleware('verified');
    Route::get('/search', [AnnouncementController::class, 'search_tenant'])->name('announcements.search_tenant');


    Route::get('/profile', function () {
        return view('./tenants/profile');
    });
});



Route::middleware(['auth', 'user-access:business_owner'])->group(function () {
    Route::get('/', [HomeController::class, 'ownerDashboard'])->name('business_owner.owner_dashboard');
    Route::post('/add_announcement', [AnnouncementController::class, 'addAnnouncement'])->name('announcements.addAnnouncement');  //announcements is the table db name....addAnnouncement is the class in controller
    Route::get('/business_owner/announcement', [AnnouncementController::class, 'index'])->name('announcement');
    Route::get('/announcements/search', [AnnouncementController::class, 'search'])->name('announcements.search');
    Route::get('/tenants', [TenantController::class, 'index'])->name('tenants');

    Route::post('/save_tenant',  [TenantController::class, 'add_tenant'])->name('save.tenant');


    Route::get('/add_tenant', function () {
        return view('./business_owner/add_tenant');
    });

    Route::get('/edit_tenant', function () {
        return view('./business_owner/edit_tenant');
    });

    Route::get('/maintenance', function () {
        return view('./business_owner/maintenance');
    });
    Route::get('/maintenance_details', function () {
        return view('./business_owner/show_maintenance');
    });

    Route::get('/properties', function () {
        return view('./business_owner/properties');
    });


});



// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

//Route::get('/home', [HomeController::class, 'index'])->name('home');
