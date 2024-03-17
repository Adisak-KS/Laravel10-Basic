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
    return view('welcome');
});

Route::get('about', function () {
    $name = "Adisak";
    $date = "17 มรนาคม 2567";
    return view('about', compact('name', 'date'));
})->name('about');

Route::get('blog', function () {
    $blogs = [
        [
            'title' => 'บทความที่ 1',
            'content' => 'บทความที่ 2',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 2',
            'content' => 'บทความที่ 2',
            'status' => false
        ],
        [
            'title' => 'บทความที่ 3',
            'content' => 'บทความที่ 3',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 4',
            'content' => 'บทความที่ 4',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 5',
            'content' => 'บทความที่ 5',
            'status' => true
        ]
    ];

    return view('blog', compact('blogs'));
})->name('blog');
