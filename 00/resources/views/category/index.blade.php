@extends('layouts.main')

@section('title')
    Categories
@endsection

@section('pageName')
    Categories
@endsection

@section('content')
<div>
    @forelse ($category as $item)
        <div>
            <a href='{{ route('category::news', ['id' => $item->id]) }}'>
                {{ $item->title }}
            </a>
        </div>
    @empty
        {{ $noMoreCategory }}
    @endforelse    
</div>
@endsection