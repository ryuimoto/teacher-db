@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/delete_guideline.css') }}">
@endsection
@section('contents')
    <hr>
    <form method="POST">
        @csrf
        <div class="preference">
            @error('name')
                <li>{{$message}}</li>
            @enderror
            <label for="name">先生の名前</label>
            <input type="text" name="name" placeholder="例) ○○県　先生の名前" id="name">
        </div>
        <br>
        <div class="preference">
            @error('details')
                <li>{{$message}}</li>
            @enderror
            <label for="details">詳細</label>
            <textarea name="details" id="details" id="" cols="30" rows="10" placeholder="現在の学校名、その他情報など"></textarea>
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
@endsection