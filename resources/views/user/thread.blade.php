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
                    <span>ID:{{ $comment->comment_view_id }}</span>
                    <div>
                        @if (isset($comment->res_view_id))
                            <span>
                                <a href="{{ route('user.comment_details',['comment' => $comment]) }}" target="_blank"> >> {{ $comment->res_view_id }}</a>
                                {{ $comment->comment }}
                            </span>
                        @else
                            <span>{{ $comment->comment }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
        @empty
        @endforelse
        <hr>
        <div class="post-box">
            <p>レスを投稿する</p>
            <hr>
            <form method="POST">
                @csrf
                <div class="post-input">
                    @error('name')
                        <li>{{$message}}</li>
                    @enderror
                    <input type="text" name="name" placeholder="名前(省略可)">
                </div>
                <div class="post-input">
                    @error('email')
                        <li>{{$message}}</li>
                    @enderror
                    <input type="text" name="email" placeholder="メールアドレス(省略可)">
                </div>
                <div class="post-input">
                    @error('comment')
                        <li>{{$message}}</li>
                    @enderror
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="コメント内容"></textarea>
                </div>
                <div class="post-input">
                    <input type="submit" value="書き込む">
                </div>
            </form>
        </div>
    </div>
@endsection
