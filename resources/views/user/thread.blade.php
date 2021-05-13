@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/thread.css') }}">
@endsection
@section('contents')
    <div class="thread">
        <h2 class="thread-name">{{ $thread->name }}</h2>
        <p>{{ $thread->details }}</p>
    </div>
    <hr>
    <div>
        @forelse ($comments as $comment)
            <div class="comment-box">
                <div>
                    <span>{{ $comment->comment_num }}</span>
                    <span class="contributor">
                        @if (is_null($comment->name))
                            {{ config('word.comment_name.0') }}
                        @else
                            {{ $comment->name }}
                        @endif
                    </span>
                    <?php
                        $week_num = $comment->created_at->format('w');
                        $week = config("word.week.$week_num");
                    ?>
                    <span>{{ $comment->created_at->format("Y/n/d($week) H:i:s") }} </span>
                    <span>ID:{{ $comment->id }}</span>
                    <div>
                        <span>{{ $comment->comment }}</span>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
   
@endsection
