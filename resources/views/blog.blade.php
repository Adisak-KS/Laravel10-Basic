@extends('layout')
@section('title', 'บทความทั้งหมด')
@section('content')
    <h2>บทความทั้งหมด</h2>
    <hr>
    @foreach ($blogs as $item)
        <h4>{{$item["title"]}}</h4>
        <p>{{$item["content"]}}</p>
        <hr>
    @endforeach
@endsection