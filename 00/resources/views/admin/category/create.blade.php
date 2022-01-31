@extends('layouts.admin')

@section('title')
    Сreate a new category 
@endsection

@section('pageName')
    Сreate a new category 
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        {{ Form::open(array('route' => 'admin::category::create')) }}
            <div class="form-group">
                <label class="form-label">
                    Category title: 
                </label>
                {{ Form::text('title', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('create', ['class' => 'btn btn-success']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection