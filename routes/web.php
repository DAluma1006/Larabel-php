<?php
use App\Http\Controllers\PostController;

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
    return view('auth.loguin');
});
 //para ingresar a un metodo
//Route::get('/post',[PostController::class,'index']);

//forma para acceder a todas las URLs
Route::resource('post',PostController::class)->middleware('auth');

Auth::routes();
Route::get('/home', [PostController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD
Route::group(['middleware' => 'auth'], function () { // Si se autentica
Route::get('/home', [PostController::class, 'index'])->name('home'); // Redirecciona al index
});

//Para ingresar a los metodos index y create
//Route::get('/home',[PostController::class,'index'])->name('home');
//Route::get('/add', [PostController::class, 'create'])->name('newPost');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
