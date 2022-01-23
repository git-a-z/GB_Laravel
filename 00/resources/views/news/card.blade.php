@extends('layouts.main')

@section('title')
    News
@endsection

@section('pageName')
    News
@endsection

@section('content')
<div>
    @isset($card['text'])
        {{ $card['text'] }}
    @endisset

    @empty($card)
        {{ $noMoreNews }}
    @endempty    
</div>
@endsection