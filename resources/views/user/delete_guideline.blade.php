@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/delete_guideline.css') }}">
@endsection
@section('contents')
    <div>
        <p>
            削除人は基本的に本ガイドラインに沿って削除してください <br>
            書き込む人は以下のガイドラインに触れないような書き込みをするよう留意してください。<br>
            センセイDBは誰も拒むことない自由な掲示板です。<br>
            簡単なルールの遵守が、気持ちのいい環境を生み出すことを判ってください。
        </p>
    </div>
    <div>
        <h3 class="title">1.個人の取り扱い</h3>
        <h4 class="definition">定義</h4>
        <h5 class="small-title">一群</h5>
        <p class="contents">政治家・芸能人・プロ活動をしている人物・有罪判決のでた犯罪者</p>
        <h5 class="small-title">二類</h5>
        <p class="contents">
            板の主旨に関係する職業で責任問題の発生する人物<br>
            著作物or創作物or活動を販売または提供して対価を得ている人物<br>
            外部になんらかの被害を与えた事象の当事者
        </p>
        <h5 class="small-title">三種</h5>
        <p class="contents">
            上記2つに当てはまらない全ての人物
        </p>
        <h4 class="definition">削除対象</h4>
        <h5 class="small-title">個人名・住所・所属</h5>
        <h5 class="small-title-second">一群</h5>
        <p class="contents-second">
            板の主旨に関係する職業で責任問題の発生する人物<br>
            著作物or創作物or活動を販売または提供して対価を得ている人物<br>
            外部になんらかの被害を与えた事象の当事者
        </p>

    </div>
@endsection
