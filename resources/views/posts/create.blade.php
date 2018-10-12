@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Form</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name','',['class' => 'form-control', 'placeholder' => 'name']) }}
            </div>
            <div class="form-group">
                {{ Form::label('content','Content') }}
                {{ Form::textarea('content','',['id' => '', 'class' => 'form-control', 'placeholder' => 'content']) }}
            </div>
                {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection

