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
    <a href="{{ route('user.request_for_deletion') }}">削除申請</a>
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
            　公開されているもの・情報価値があるもの・公益性が有るもの・等は削除しません。削除の可否は管理人が判断します。
        </p>
        <h5 class="small-title-second">二類</h5>
        <p class="contents-second">
            　外部から確認できない・責任や事象に無関係な情報は削除対象です。公開されたインターネットサイト・全国的マスメディア・電話帳で確認できる・等、隠されていない情報については削除しません。
        </p>
        <h5 class="small-title-second">三種</h5>
        <p class="contents-second">
            誹謗中傷の個人特定が目的である・文意により攻撃目的である等の場合は全て削除対象になります。
        </p>
        <h5 class="small-title">電話番号</h5>
        <p class="contents-second">
            電話番号は、一部伏字・それを示唆するような文字列・等でも、確認方法が確立していない為に原則として全て削除対象です。<br>
            明らかに公的な物・投稿者がハンドルキャップ使用・文意によって本人が公開したと判断できるもの・リンク先で確認できるもの・等は、<br>
            自己責任として削除されないことがあります。
        </p>
        <h5 class="small-title">メールアドレス</h5>
        <p class="contents-second">
            　騙りの可能性や悪意が明らかで攻撃を目的としている・趣旨説明が無く衆目に晒すことを目的としている・等の場合のみ荒らし依頼として扱います。<br>
            メール欄に書かれていても同様です。判断は文意によります。
        </p>
        <h5 class="small-title">誹謗中傷</h5>
        <h5 class="small-title-second">一群</h5>
        <p class="contents-second">
            管理人裁定の無い限り削除しません。
        </p>
        <h5 class="small-title-second">二類</h5>
        <p class="contents-second">
            板の趣旨に則した公益性が有る事象・直接の関係者や被害者による事実関係の記述・等が含まれたものは削除されません。
        </p>
        <h5 class="small-title-second">三種</h5>
        <p class="contents-second">
            個人を完全に特定する情報を伴っているものは削除対象です。
        </p>
        <h5 class="small-title">私生活情報</h5>
        <p class="contents-second">
            情報価値が無く、私事のみの情報・第三者の確認できないプライベート情報は、<br>
            個人が完全に特定されなくても、対象者に不利益が発生する可能性があれば、一律削除対象とします。
        </p>
        <h3 class="title">2.法人・団体・公的機関の取り扱い</h3>
        <h4 class="definition">原則放置</h4>
        <p class="contents">
            法人・団体については、カテゴリによって扱いが違いますが、原則として放置であるとご理解ください。<br>
            社会・出来事カテゴリ内では、批判・誹謗中傷、インターネット内で公開されている情報、<br>
            インターネット外のデータソースが不明確なもの、は全て放置です。<br>
            その他のカテゴリ内では、掲示板の趣旨に関係があり、<br>
            客観的な問題提起がある・公益性のある情報を含む・その法人・企業が外部になんらかの影響を与える事件に関係している・等の場合は放置です。<br>
            学問カテゴリ内では、この判定を厳しくいたします。<br>
            公的機関については、他の削除基準と掲示板の趣旨に反しない限り放置します。
        </p>
        <h4 class="definition">削除対象</h4>
        <p class="contents">
            電話番号については、明らかに公的なもの以外は確認手段が確立していないので一律削除対象になります。<br>
            その他、放置対象ではない場合は削除されることがあります。<br>
            削除の可否は、依頼があった時点で考慮されることになり、最終的に管理人が判断します。
        </p>
        <h4 class="definition">依頼方法</h4>
        <p class="contents">
            担当部署および担当責任者の連絡方法（メールアドレス可）が必須です。<br>
            それ以外は、通常の依頼と同様に削除理由と削除対象の特定も必要です。<br>
            メールや電話よりも、削除依頼をお勧めします。<br>
            削除要請板ではフォームから入力し、新規スレッドを立ててお願いします。<br>
            内容証明や電話やメールなどで削除内容に対する説明をいただけば考慮はしますが、<br>
            そういった場合も、上記のように削除依頼を出していただいた上でお願いします。
        </p>
        <h3 class="title">３.固定ハンドル(センセイDB)に関して</h3>
        <h4 class="definition">叩きについて</h4>
        <p class="contents">
            最悪板以外では全て削除します。
        </p>
        <h4 class="definition">スレッド</h4>
        <p class="contents">
            固定ハンドルが題名に入っている・固定ハンドルが占用している・閉鎖的な使用法を目的としている・等は、<br>
            自己紹介板・最悪板・夢・独り言板・おいらロビー・なんでもあり板以外では、<br>
            原則として全て削除または移動対象にします。<br>
            ただし、固定ハンドル個人が一群または二類に属する時は、<br>
            他の削除規定に触れない限り様子見となります。
        </p>
        <h3 class="title">４.投稿目的による削除対象</h3>
        <h4 class="definition">スレッド</h4>
        <p class="contents">
            掲示板の趣旨に関係があり、論理的で主観だけではない批判は残します。<br>
            掲示板の趣旨に関係があっても、利用者の気分を害するため・利用者を揶揄するために作られたと判断したものは削除対象になります。<br>
            掲示板自体の事象や参加者に関するもので、議論にならないと判断した場合も同様です。<br>
            番組や試合や事象などをリアルタイムに中継する・大量な書き込みを目的としている・等、<br>
            サーバに負荷が高い行為を目的・実行しているものは移動対象になることがあります。<br>
            雑談系以外の専用板では、全く情報価値の無いもの・真面目な議論や話し合いを目的としないもの・板の趣旨よりネタを優先するもの・客観的な意見を求めないもの・等の、<br>
            複数の状態に当てはまる時、削除または移動対象になることがあります。
        </p>
        <h4 class="definition">レス・発言</h4>
        <p class="contents">
            議論を妨げる煽り、不必要に差別の意図をもった発言、第三者を不快にする暴言や排他的馴れ合い、<br>
            同一の内容を複数行書いたもの、過度な性的妄想・下品である、等は削除対象とします。
        </p>
        <h4 class="definition">差別・蔑視</h4>
        <p class="contents">
            　地域・人種などの差別発言は人権問題板で、蔑視的思想発言は政治思想板で、それ以外は削除対象になります。<br>
            　上記２板を含めて、差別・蔑視の意図がある地域名または苗字等の書き込みは、その真偽を問わず削除対象になります。<br>
            　それ以外の書き込みに関しては議論となることを前提に静観します。<br>
        </p>
        <h4 class="definition">データ</h4>
        <p class="contents">
            公開することで第三者が損失を受けるデータは、削除される場合を限定します。<br>
            今のところ、シリアルとキャップパスと運営系スクリプト関係は削除対象です。<br>
            その他のパスワードは任意削除とします。<br>
            会話とは無関係なホスト情報晒しは任意削除とします。<br>
            画像・音楽・ゲーム・ソフト・等のデータを求める発言は禁止です。<br>
            確信犯的なものや繰り返している場合は削除対象になります。
        </p>
        <h4 class="definition">地域地方関係</h4>
        <p class="contents">
            地域や地方が限定されて第三者に情報価値の無いもの、<br>
            または、市区町村かそれ以下の範囲でしか成り立たないものは、<a href="https://machi.to/" target="_blank">まちＢＢＳ</a>のほうでお願いします。<br>
            センセイDB内では削除対象になります。
        </p>
        <h3 class="title">５.掲示板・スレッドの趣旨とは違う投稿</h3>
        <h4 class="definition">スレッド</h4>
        <p class="contents">
            それぞれの掲示板の趣旨は、カテゴリと掲示板の名称によって判断します。<br>
            ローカルルールは、補助的ながら板違いの判断には重要です。<br>
            雑談系の掲示板を除いては、その掲示板の趣旨に無関係なもの、<br>
            多少関係があっても他にふさわしい掲示板があるもの、<br>
            掲示板の趣旨より掲示板自体の事象や参加者を重要視するもの、などは移動します。<br>
            雑談系掲示板でも、明らかに趣旨と異なる場合は移動対象です。<br>
            その他の掲示板でも、雑談スレッドは２～３個まで考慮します。<br>
            有用なレスが多ければ停止の場合もありますが、有用なレスが無いと判断されれば削除になることもあります。<br>
            移動先が同一サーバにないか、移動先で重複になる場合、ゴミ板へ移動されます。
        </p>
        <h4 class="definition">レス・発言</h4>
        <p class="contents">
            スレッドの趣旨から外れすぎ、議論または会話が成立しないほどの状態になった場合は削除対象になります。<br>
            故意にスレッドの運営・成長を妨害していると判断した場合も同様です。
        </p>
        <h3 class="title">６.連続投稿・重複</h3>
        <h4 class="definition">連続投稿・コピー＆ペースト</h4>
        <p class="contents">
            連続投稿で利用者の会話を害しているものは削除対象になります。<br>
            個々の内容に違いがあっても、荒らしを目的としていると判断したものは同様です。<br>
            コピー＆ペーストやテンプレートの存在するものは、アレンジが施してあれば残しますが、<br>
            全く変更されていない・一部のみの変更で内容の変わらないもの、スレッドの趣旨と違うもの、<br>
            不快感を与えるのが目的なもの、などは荒らしの意図があると判断して削除対象になります。<br>
        </p>
        <h4 class="definition">アスキーアート</h4>
        <p class="contents">
            顔文字板・モナー板・ニダー板・ＡＡ長編・ＡＡサロン・厨房板以外では、<br>
            必然性がないと判断されれば削除対象になります。<br>
            上記も含めた全掲示板で、連続投稿・コピー＆ペーストに該当するものは削除対象になります。<br>
            逆に、上記では必然性のない文章レスが削除対象になることがあります。
        </p>
        <h4 class="definition">重複スレッド</h4>
        <p class="contents">
            同じ事象・人物に関するスレッドは、個々に多少の違いがあっても原則的に削除対象になります。<br>
            その場合、立てられた時期・時間、１に書かれている内容、レスがどれだけついているか、<br>
            という優先順位で総合的に判断します。<br>
            客観的な判断が難しい時は、利用者同士の話し合いを待つか、<br>
            立てられた時間の遅いものを停止処置をすることとします。<br>
            同一掲示板内ではない重複スレッドは、内容にほぼ変化のない場合は悪質なマルチポストと判断し、<br>
            板の趣旨に合った真面目な議論が続いた場合を除き、全てを削除対象とします。
        </p>
        <h4 class="definition">乱立スレッド</h4>
        <p class="contents">
            厨房板以外では、内容にほぼ変化のないもの、内容が無意味なもの、などの乱立は全て削除します。
        </p>
        <h3 class="title">７.エロ・下品</h3>
        <p class="contents">
            センセイDB内での過度なエロ・性的煽り・性的妄想・下品ネタは禁止されています。<br>
            画像へのリンクも同様です。これらは例外なく削除対象になります。
        </p>
    </div>
@endsection
