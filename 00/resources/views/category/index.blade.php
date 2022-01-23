@extends('layouts.main')

@section('title')
    Categories
@endsection

@section('pageName')
    Categories
@endsection

@section('content')
<div>
    @forelse ($category as $id => $item)
        <div>
            <a href='{{ route('category::news', ['id' => $id]) }}'>
                {{ $item['title'] }}
            </a>
        </div>
    @empty
        {{ $noMoreCategory }}
    @endforelse    
</div>
@endsection