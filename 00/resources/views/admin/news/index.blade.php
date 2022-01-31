@extends('layouts.admin')

@section('title')
    News
@endsection

@section('pageName')
    News
@endsection

@section('content')
<div>
    @forelse ($news as $item)
        <div>
            <a href='{{ route('news::card', ['id' => $item->id]) }}'>
                {{ $item->title }}
            </a>     
            <a href='{{ route('admin::news::delete', ['id' => $item->id]) }}'>
                (delete)
            </a>
            <a href='{{ route('admin::news::edit', ['id' => $item->id]) }}'>
                (edit)
            </a>
        </div>
    @empty
        {{ $noMoreNews }}
    @endforelse    
</div>
@endsection