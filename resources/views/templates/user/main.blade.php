<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/user/main.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <img class="logo_img" src="{{ asset('img/logo.png') }}" alt="ロゴ">
        <div>
            <a href="{{ route('user.threads') }}">掲示板</a>
            <a href="">使い方</a>
            <a href="">削除ガイドライン</a>
            <a href="">支援する</a>
        </div>
        @yield('contents')
    </header>
    <footer>
        <small>© 2018 corpname inc.</small>
    </footer>
</body>
</html>