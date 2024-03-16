<?php

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
    return "<a href='".route('login')."'>Login</a>";
});

Route::get('about', function () {
    return "<h1>เกี่ยวกับเรา</h1>";
});

Route::get('blog', function () {
    return "<h1>บทความทั้งหมด</h1>";
});

Route::get('blog/{name}', function ($name) {
    return "<h1>บทความ $name</h1>";
});

Route::get('admin/user/adisak', function () {
    return "<h1>ยินดีต้อนรับ Admin</h1>";
})->name('login');


Route::fallback(function () {
    return "<h1>ไม่พบหน้าหน้าเว็บ</h1>";
});