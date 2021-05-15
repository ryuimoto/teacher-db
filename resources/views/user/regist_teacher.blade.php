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
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div class="preference">
            @error('details')
                <li>{{$message}}</li>
            @enderror
            <label for="details">詳細</label>
            <textarea name="details" id="details" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
@endsection