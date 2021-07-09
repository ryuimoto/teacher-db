@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/top.css') }}">
@endsection
@section('contents')
    <div class="topic1">
        <h2>注目のスレッド</h2>
    </div>
    <div class="topic_body">
        @forelse ($thread_attensions as $thread_attension)
            <div class="comment-box">
                <a href="{{ route('user.thread',['thread' => $thread_attension->id])}}">{{ $thread_attension->name }}</a>
                <p>{{ Str::limit($thread_attension->details,200,'…')}}</p>
                <p>{{ $thread_attension->created_at->format('Y年m月d日') }}</p>
            </div>
        @empty
        @endforelse
        <div>
            {{-- {{ $thread_attensions->links('vendor.pagination.semantic-ui') }} --}}
        </div>
    </div>
@endsection
