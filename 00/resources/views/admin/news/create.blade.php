@extends('layouts.admin')

@section('title')
    Сreate news 
@endsection

@section('pageName')
    Сreate news 
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        {{ Form::open(array('route' => 'admin::news::create')) }}
            <div class="form-group">
                <label class="form-label">
                    News title: 
                </label>
                {{ Form::text('title', '', ['class' => 'form-control']) }}
                <label class="form-label">
                    News text: 
                </label>
                {{ Form::textarea('text', '', ['class' => 'form-control']) }}
                <label class="form-label">
                    News category: 
                </label>
                {{ Form::select('category_id', $categoryArray, '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('create', ['class' => 'btn btn-success']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection