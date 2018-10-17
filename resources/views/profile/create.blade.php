@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Form</h1>
        {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('county','County') }}
                {{ Form::text('county','',['class' => 'form-control', 'placeholder' => 'county']) }}
            </div>
                {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection