@extends('templates.user.main')
@section('contents')
    @if (session('post_message'))
        <div class="flash_message bg-success text-center py-3 my-0">
            {{ session('post_message') }}
        </div>
        <br>
    @endif
    <form method="post">
        @csrf
        <tr>
            <td>
                @error('classification')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <th>削除の区分：</th>
                <label for="">
                    <input type="radio" name="classification" value="1" checked>スレッド
                </label>
                <label for="">
                    <input type="radio" name="classification" value="2">レス
                </label>
                <small>
                    &nbsp;
                    <b>お名前：</b>
                    <input type="text" name="name">
                    &nbsp;
                    <b>掲示板：</b>
                    <input type="text" name="thread_name">
                </small>
            </td>
        </tr>
        <br>
        @error('url.1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <tr>
            <th>削除対象URL： </th>
            <td><input type="text" name="url[]"></td>
        </tr>
        <br>
        @error('url.2')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <tr>
            <th>指定URLを必ず</th>
            <td><input type="text" name="url[]"></td>
        </tr>
        <br>
        @error('url.3')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <tr>
            <th>削除対象のみをお書きください。</th>
            <td><input type="text" name="url[]"></td>
        </tr>
        <br>
        @error('reason')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <tr>
            <th>依頼の理由：<br>詳細・その他：</th>
            <td><textarea name="delete_reason" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <br>
        <input type="submit" value="削除依頼をする">
    </form>
@endsection
