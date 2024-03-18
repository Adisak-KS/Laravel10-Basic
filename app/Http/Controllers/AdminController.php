<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        // $blogs = DB::table("blogs")->paginate(3);
        $blogs = Blog::paginate(5);
        return view('blog', compact('blogs'));
    }

    // function about()
    // {
    //     $name = "Adisak";
    //     $date = "17 มรนาคม 2567";
    //     return view('about', compact('name', 'date'));
    // }

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
        // DB::table('blogs')->insert($data);
        Blog::insert($data);
        return redirect('/author/blog');
    }

    function delete($id)
    {
        // DB::table('blogs')->where('id', $id)->delete();
        // return redirect('/blog');
        Blog::find($id)->delete();
        return redirect()->back();
    }

    function change($id)
    {
        // $blog = DB::table('blogs')->where('id', $id)->first();
        $blog = Blog::find($id);
        $data = [
            'status' => !$blog->status
        ];
        // $blog = DB::table('blogs')->where('id', $id)->update($data);
        // return redirect('/blog');
        $blog = Blog::find($id)->update($data);
        return redirect()->back();        
    }

    function edit($id)
    {
        // $blog = DB::table('blogs')->where('id', $id)->first();
        $blog = Blog::find($id);
        return view('edit', compact('blog'));
    }

    function update(Request $request, $id)
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
        // DB::table('blogs')->where('id', $id)->update($data);
        Blog::find($id)->update($data);
        return redirect('/author/blog');
    }
}
