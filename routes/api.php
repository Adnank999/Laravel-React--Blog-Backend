<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => ['auth', 'role:user']], function () {
    //All secure URL's





});


    Route::post("register", [UserAuthController::class, 'register']);
    Route::post("login", [UserAuthController::class, 'login']);



Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);




Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{id}', [BlogController::class, 'show']);
Route::delete('blogdelete/{id}', [BlogController::class, 'delete']);
// Route::post('upload',[FileController::class,'upload']);
Route::get('getImage', [FileController::class, 'getImage']);





Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('addnew/{id}', [BlogController::class, 'store']);
});