
@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/threads.css') }}">
@endsection
@section('contents')
    <div class="coontents">
    
        @forelse ($threads as $thread)
            <div class="comment-box">
                <a href="">{{ $thread->name }}</a>
                <p>{{ $thread->created_at->format('Y年m月d日') }}</p>
            </div>
        @empty
        @endforelse
       
    </div>
@endsection
