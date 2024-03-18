<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $blogs = DB::table("blogs")->get();

        return view('blog', compact('blogs'));
    }

    function about()
    {
        $name = "Adisak";
        $date = "17 มรนาคม 2567";
        return view('about', compact('name', 'date'));
    }

    function create()
    {
        return view('form');
    }

    function insert(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required'
            ],
            [
                'title.required' => 'กรุณาป้อนชื่อบทความของคุณ',
                'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required' => 'กรุณาป้อนเนื้อหาบทความของคุณ'
            ]
        );
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];
        DB::table('blogs')->insert($data);
        return redirect('/blog');
    }

    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('/blog');
    }
}
