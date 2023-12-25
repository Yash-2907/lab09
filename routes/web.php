<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CategoryController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

require __DIR__.'/auth.php';

Route::get('/admin/posts', [AdminPostsController::class, 'index'])->name('admin_posts');
Route::get('/admin/users', [AdminUsersController::class, 'index'])->name('admin_users');

Route::get('/admin/categories', [
    CategoryController::class, 'index'
])->middleware('auth')->name('admin-categories');

Route::get('/admin/categories/create', [
    CategoryController::class, 'create'
])->middleware('auth')->name('admin-categories-create');

Route::post('/admin/categories/create', [
    CategoryController::class, 'store'
])->middleware('auth')->name('admin-categories-create');

Route::get('/admin/categories/{id}/edit', [
    CategoryController::class, 'edit'
])->middleware('admin')->name('admin-categories-edit');

Route::patch('/admin/categories/{id}/edit', [
    CategoryController::class, 'update'
])->middleware('admin')->name('admin-categories-edit');