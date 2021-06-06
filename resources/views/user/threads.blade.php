
@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/threads.css') }}">
@endsection
@section('contents')
    <div class="coontents">
        <div>
            <form method="GET">
                @csrf
                <input type="search" name="keyword" placeholder="教師の名前で検索">
                <input type="submit" name="submit" value="検索">
            </form>
        </div>
        <div>
            <button onclick="location.href='{{ route('user.regist_teacher') }}'">先生を登録する</button>
        </div>
        <div>
            @forelse ($threads as $thread)
                <div class="comment-box">
                    <a href="{{ route('user.thread',['thread' => $thread->id])}}">{{ $thread->name }}</a>
                    <p>{{Str::limit($thread->details,200,'…')}}</p>
                    <p>{{ $thread->created_at->format('Y年m月d日') }}</p>
                </div>
            @empty
            @endforelse
            <div>
                {{ $threads->links('vendor.pagination.semantic-ui') }}
            </div>
        </div>
    </div>
@endsection