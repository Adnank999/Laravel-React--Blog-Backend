<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified','role:user'])->name('dashboard');

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admindashboard');
    Route::get('/admin/dashboard/allblogs', [BackendController::class, 'index'])->name('allblogs');
    Route::get('/admin/dashboard/allblogs/{id}', [BackendController::class, 'show'])->name('blogs.show');
    Route::get('/admin/dashboard/blogdelete/{id}', [BackendController::class, 'delete'])->name('blogs.delete');
   
   
});

Route::prefix('poll')->middleware('auth')->group(function(){
    Route::view('create', 'polls.create')->name('poll.create');
    Route::post('create', [PollController::class, 'store'])->name('poll.store');
    Route::get('pollindex', [PollController::class,'index'])->name('poll.index');
    Route::get('/update/{poll}', [PollController::class,'edit'])->name('poll.edit');
    Route::put('/update/{poll}', [PollController::class,'update'])->name('poll.update');
    Route::get('delete/{poll}',[PollController::class,'delete'])->name('poll.delete');

    Route::get('/{poll}', [PollController::class,'show'])->name('poll.show');
    Route::post('/{poll}/vote', [PollController::class,'vote'])->name('poll.vote');
});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
