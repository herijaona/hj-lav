@extends('layouts.app')

@section('content')
<div class="container">
    <a href="\posts">Go back</a>
    <h3>{{ $post->name }}</h3>
    <small>{{ $post->created_at}}</small>
    <p>{{ $post->content }}</p>
    <a href="\posts\{{ $post->id }}\edit">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!!Form::close()!!}
</div>
@endsection