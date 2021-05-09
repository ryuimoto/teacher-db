@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/thread.css') }}">
@endsection
@section('contents')
    <div class="thread">
        <h2 class="thread-name">{{ $thread->name }}</h2>
        <p>{{ $thread->details }}</p>
    </div>
    <div class="comments">
        
    </div>
@endsection
