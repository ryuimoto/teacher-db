@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/thread.css') }}">
@endsection
@section('contents')
    <div class="thread">
        <h2 class="thread-name">{{ $thread->name }}</h2>
        @php
            $thread->details = \App\Library\planetextToUrl::convertLink($thread->details);
        @endphp
        <p>{!! nl2br(e($thread->details)) !!}</p>
    </div>
    <hr>
    <div>
        @if (isset($comments))
            @forelse ($comments as $comment)
                @php
                    $comment->comment = \App\Library\planetextToUrl::convertLink($comment->comment);
                @endphp
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
                            @if (isset($comment->res_comment_num))
                                <span>
                                    <a href="{{ route('user.comment_details',['comment' => $comment,'thread' => $thread]) }}" target="_blank"> >>{{ $comment->res_comment_num }}</a>
                                    {!! nl2br($comment->comment) !!}
                                </span>
                            @else
                                <span>{!! nl2br($comment->comment) !!}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <br>
            @empty
            @endforelse
        @endif
        @if (\Route::currentRouteName() == 'user.comment_details')
            <div class="comment-box">
                <div>
                    <span>{{ $parent_comment->comment_num }}</span>
                    <span class="contributor">
                        @if (is_null($parent_comment->name))
                            {{ config('word.comment_name.0') }}
                        @else
                            {{ $parent_comment->name }}
                        @endif
                    </span>
                    <?php
                        $week_num = $parent_comment->created_at->format('w');
                        $week = config("word.week.$week_num");
                    ?>
                    <span>{{ $parent_comment->created_at->format("Y/n/d($week) H:i:s") }} </span>
                    <span>ID:{{ $parent_comment->comment_view_id }}</span>
                    <div>
                        @if (isset($parent_comment->res_comment_num))
                            <span>
                                <a href="{{ route('user.comment_details',['comment' => $parent_comment,'thread' => $thread]) }}" target="_blank"> >>{{ $parent_comment->res_comment_num }}</a>
                                {{ $parent_comment->comment }}
                            </span>
                        @else
                            <span>{{ $comment->comment }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
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
                        @if (isset($comment->res_comment_num))
                            <span>
                                <a href="{{ route('user.comment_details',['comment' => $comment,'thread' => $thread]) }}" target="_blank"> >>{{ $comment->res_comment_num }}</a>
                                {{ $comment->comment }}
                            </span>
                        @else
                            <span>{{ $comment->comment }}</span>
                        @endif
                    </div>
                </div>
            </div>
        @endif
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
                    <input type="text" name="name" placeholder="名前(省略可)" value="{{ old('name') }}">
                </div>
                <div class="post-input">
                    @error('email')
                        <li>{{$message}}</li>
                    @enderror
                    <input type="text" name="email" placeholder="メールアドレス(省略可)" value="{{ old('email') }}">
                </div>
                <div class="post-input">
                    @error('comment')
                        <li>{{$message}}</li>
                    @enderror
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="コメント内容">{{ old('comment') }}</textarea>
                </div>
                <div class="post-input">
                    <input type="submit" value="書き込む">
                </div>
            </form>
        </div>
    </div>
@endsection
