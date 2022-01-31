@extends('layouts.admin')

@section('title')
    Edit news 
@endsection

@section('pageName')
    Edit news 
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        {{ Form::open(array('route' => array('admin::news::update', $news->id))) }}
            <div class="form-group">
                <label class="form-label">
                    News title: 
                </label>
                {{ Form::text('title', $news->title, ['class' => 'form-control']) }}
                <label class="form-label">
                    News text: 
                </label>
                {{ Form::textarea('text', $news->text, ['class' => 'form-control']) }}
                <label class="form-label">
                    News category: 
                </label>
                {{ Form::select('category_id', $categoryArray, $news->category_id, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('update', ['class' => 'btn btn-success']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection