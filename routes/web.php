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

Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');


//Admin
Route::middleware('auth')->prefix('admin')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
    Route::post('menu/update/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');


#Content
Route::prefix('content')->group(function () {
    //Route assigned name "admin.users"...
    Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_content');
    Route::get('/create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
    Route::post('/store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
    Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
    Route::post('/update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
    Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
    Route::get('/show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
    Route::resource('editor','CKEditorController');
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('admin_content_upload');



});

});
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

    Route::resource('editor','CKEditorController');
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('admin_content_upload');

})->name('dashboard');
