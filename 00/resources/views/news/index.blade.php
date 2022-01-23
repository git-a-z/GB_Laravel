@extends('layouts.main')

@section('title')
    News
@endsection

@section('pageName')
    News
@endsection

@section('content')
<div>
    @forelse ($news as $id => $item)
        <div>
            <a href='{{ route('news::card', ['id' => $id]) }}'>
                {{ $item['title'] }}
            </a>
        </div>
    @empty
        {{ $noMoreNews }}
    @endforelse    
</div>
@endsection