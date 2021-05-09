@extends('templates.user.main')
@section('style')

@endsection
@section('contents')
    <div>
        <p>{{ $thread->name }}</p>
        <p>{{ $thread->details }}</p>
    </div>
@endsection
