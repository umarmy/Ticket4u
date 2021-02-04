<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return redirect('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('dashboard');

Route::get('/member', [HomeController::class, 'index'])->middleware(['auth'])->name('member');
Route::delete('/member/{member}', [HomeController::class, 'destroy'])->name('member.destroy');
Route::put('/member/{member}', [HomeController::class, 'update'])->name('member.update');

require __DIR__.'/auth.php';
