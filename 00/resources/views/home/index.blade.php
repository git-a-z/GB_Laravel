@extends('layouts.main')

@section('title')
    Home
@endsection

@section('pageName')
    Home
@endsection

@section('content')
    <div>
        <div><a href='{{ route('category::catalog') }}'>Categories</a></div>
        <div><a href='{{ route('news::catalog') }}'>News</a></div>  
    </div>
@endsection