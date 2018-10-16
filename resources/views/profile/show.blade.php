@extends('layouts.app')

@section('content')
    @if(isset($user->profiles->user_id))
        {{ $user->profiles->county }}
    @else
        {{ Redirect('/home') }}
    @endif
@endsection