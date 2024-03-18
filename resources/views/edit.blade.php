@extends('layouts.app')
@section('title', 'แก้ไขบทความ')
@section('content')
    <h2 class="text-center py-2">แก้ไขบทความ</h2>
    <form action="{{route('update', $blog->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control" value="{{$blog->title}}">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="title">เนื้อหาบทความ</label>
            <textarea name="content" cols="30" rows="5" class="form-control">{{$blog->content}}</textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <input type="submit" value="อัปเดท" class="btn btn-primary my-3">
        <a href="/author/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
@endsection
