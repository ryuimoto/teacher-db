<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/user/main.css') }}">
    @yield('style')
    <title>{{ config('name.site_title') }}</title>
</head>
<body>
    <header>
        <a href="{{ route('user.top') }}">
            <img class="logo_img" src="{{ asset('img/logo.png') }}" alt="ロゴ">
        </a>
        <div>
            <a href="{{ route('user.threads') }}">教師リスト</a>
            <a href="">使い方</a>
            <a href="{{ route('user.delete_guideline') }}">削除ガイドライン</a>
            <a href="{{ route('user.support') }}">支援する</a>
        </div>
        <div>
            <input type="search" placeholder="教師の名前で検索">
            <input type="submit" name="submit" value="検索">
        </div>
        @yield('contents')
    </header>
    <footer>
        <small>© {{ \Carbon\Carbon::now()->year  }} corpname inc.</small>
    </footer>
</body>
</html>