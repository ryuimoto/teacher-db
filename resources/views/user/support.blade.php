@extends('templates.user.main')
@section('style')
@endsection
@section('contents')
    <div>
        <p>もし本サイトがあなたのお役に立てたなら、投げ銭をいただけると大変ありがたく思います。</p>
        <p>データベースの更新に係るモチベーションになると思いますので、</p>
        <p>何卒、よろしくお願いいたします。</p>
    </div>
    <div>
        <form method="post">
            @csrf
            <input type="number" min="0">
            <p></p>
            <input type="submit" value="投げ銭する">
        </form>
    </div>
@endsection
