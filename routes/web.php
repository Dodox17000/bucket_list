<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\WishController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/legal-stuff', [MainController::class, 'legal'])->name('legal');
/**
 * whishController
 */
Route::get('/detail/{wish}', [WishController::class, 'detail'])->name('detail');
Route::get('/liste', [WishController::class, 'list'])->name('liste');
//voir les Listes
Route::get('/listes', [WishController::class, 'lists'])->name('listes');

//add liste
Route::get('/liste/add', [WishController::class, 'add'])->name('liste_add');;
Route::post('/liste/add', [WishController::class, 'add']);
// supp un article
Route::get('/liste/supprimer/{list}', [WishController::class, 'delete'])->name('liste_supprimer');
//edit
Route::get('/liste/editer/{list}', [WishController::class, 'edit'])->name('liste_editer');
Route::post('/liste/editer/{list}', [WishController::class, 'edit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
