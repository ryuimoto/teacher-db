@extends('templates.user.main')
@section('contents')
    <form method="post">
        @csrf
        <tr>
            <th>削除の区分：</th>
            <td>
                <label for="">
                    <input type="radio" name="classification" value="thread" checked>スレッド
                </label>
                <label for="">
                    <input type="checkbox" name="classification" value="res">レス
                </label>
                <small>
                    &nbsp;
                    <b>お名前：</b>
                    <input type="text">
                    &nbsp;
                    <b>掲示板：</b>
                    <input type="text">
                </small>
            </td>
        </tr>
        <br>
        <tr>
            <th>削除対象URL： </th>
            <td><input type="text"></td>
        </tr>
        <br>
        <tr>
            <th>指定URLを必ず</th>
            <td><input type="text"></td>
        </tr>
        <br>
        <tr>
            <th>削除対象のみをお書きください。</th>
            <td><input type="text"></td>
        </tr>
        <br>
        <tr>
            <th>依頼の理由：<br>詳細・その他：</th>
            <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <br>
        <input type="submit" value="削除依頼をする">
    </form>
@endsection
