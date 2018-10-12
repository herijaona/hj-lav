@extends('layouts.app')

@section('content')
<div class="container">
    <a href="\posts">Go back</a>
    <h3>{{ $post->name }}</h3>
    <small>{{ $post->created_at}}</small>
    <p>{{ $post->content }}</p>
</div>
@endsection