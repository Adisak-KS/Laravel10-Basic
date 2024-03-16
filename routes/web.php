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
    return "<h1>ยินดีต้อนรับเข้าสู่หน้าแรกของเว็บไซต์</h1>";
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
