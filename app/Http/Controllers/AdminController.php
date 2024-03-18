<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
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
            ]
        ];

        return view('blog', compact('blogs'));
    }

    function about()
    {
        $name = "Adisak";
        $date = "17 มรนาคม 2567";
        return view('about', compact('name', 'date'));
    }
}
