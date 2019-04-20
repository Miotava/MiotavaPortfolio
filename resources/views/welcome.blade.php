@extends('layouts.defaultLayout')
@section('title','Welcome! | Miotava\'s Portfolio')
@section('content')
<div class="main-title">
    <h1>Welcome to Miotava's Portfolio Website!!</h1>
</div>

<h2>経歴</h2>
<div class="lg-section">
    <div class="card bg-secondary job-card">
        <div class="card-header">2013年3月</div>
        <div class="card-body">
            <h4 class="card-title">東京工業大学工学部情報工学科卒業</h4>
            <p class="card-text">授業ではコンピュータサイエンスを学び、卒論では符号理論の研究を行い国内学会にて発表しました。</p>
            <a href="https://ci.nii.ac.jp/naid/110009666477" class="card-link" target="_blank">国内学会発表論文</a>
        </div>
    </div>
    <div class="card bg-secondary job-card">
        <div class="card-header">2015年3月</div>
        <div class="card-body">
            <h4 class="card-title">東京工業大学大学院通信情報工学専攻卒業</h4>
            <p class="card-text">
                修士でも符号理論の研究を行い、学部時代からの研究を発展させテキサス大学研究者と共同執筆した論文が査読付きの国際学会へアクセプトされました。（当時会場であったトルコでの暴動騒動があったため発表は見送りました）。<br>
                また、修士論文では産業総合研究所の研究者と共同で定理証明支援システムCoqによる符号理論の定式化を行いました。
            </p>
            <a href="https://ieeexplore.ieee.org/document/6620663" class="card-link" target="_blank">国際学会論文</a>
        </div>
    </div>
    <div class="card bg-secondary job-card">
        <div class="card-header">2015年4月〜2017年9月末</div>
        <div class="card-body">
            <h4 class="card-title">KDDI株式会社</h4>
            <p class="card-text">
                法人向けのクラウドサービス企画部門にて、以下業務を行いました。
                <h6 class="card-subtitle">レガシーホスティングサービスの巻き取り</h6>
                <div class="card-desc">
                    主にお客様向けのサービス終了・移行アナウンスや、それに伴う告知Webサイト・DMの仕様作成、CS部門との調整やトークスクリプト作成、移行先サービス（他社）担当者との調整業務などを行いました。
                </div>
                <h6 class="card-subtitle">データ分析企業との協業事業立ち上げ</h6>
                <div class="card-desc">
                    データサイエンティストを多く抱え他社のデータ分析課題を解決できる企業を選定のうえ、フローや役割分担などを調整し契約・協業するに至るまで担当しました。
                </div>
                <h6 class="card-subtitle">パブリッククラウドサービスの再販</h6>
                <div class="card-desc">
                    こちらはほぼサブとしての立ち位置でしたが、先述のデータ分析企業との協業案件で使用していく基盤としてエンドユーザにパブリッククラウドを紹介するフローなどを策定しました。
                </div>
            </p>
            <a href="http://news.kddi.com/kddi/corporate/newsrelease/2017/06/12/2495.html" class="card-link"
                target="_blank">参考：「Google Cloud Platform (TM)」の提供開始について</a>
        </div>
    </div>
    <div class="card bg-secondary job-card">
        <div class="card-header">2017年4月〜2017年8月</div>
        <div class="card-body">
            <h4 class="card-title">東京大学 工学系研究科 技術経営戦略学専攻 グローバル消費インテリジェンス寄附講座 第1期生修了</h4>
            <p class="card-text">
                データサイエンスで有名な松尾研究室の方々が主催しているデータ分析に関する基礎講座を修了しました。（約4ヶ月間）<br>
                講座では以下を学びました（リンクの本にて講座内容がほぼ同じものが出版されているとのことです）。
                <br> 当時仕事でデータサイエンティストの方々とお付き合いすることが多かったため前提知識として役に立ちましたし、
                後にAPIやネット上から取得した物販に関する情報をローカルで分析する際にも役に立ち、とても有益な講座でした。
                <ul>
                    <li>確率・統計など大学初等程度の数学基礎おさらい</li>
                    <li>Pythonおよび科学計算/データ加工/可視化に関する各ライブラリ（Numpy/Scipy/Pandas/Matplotlib）の利用習得</li>
                    <li>機械学習の基礎</li>
                    <li>モデルの検証・チューニング方法</li>
                </ul>
            </p>
            <a href="https://www.amazon.co.jp/%E6%9D%B1%E4%BA%AC%E5%A4%A7%E5%AD%A6%E3%81%AE%E3%83%87%E3%83%BC%E3%82%BF%E3%82%B5%E3%82%A4%E3%82%A8%E3%83%B3%E3%83%86%E3%82%A3%E3%82%B9%E3%83%88%E8%82%B2%E6%88%90%E8%AC%9B%E5%BA%A7-Python%E3%81%A7%E6%89%8B%E3%82%92%E5%8B%95%E3%81%8B%E3%81%97%E3%81%A6%E5%AD%A6%E3%81%B6%E3%83%87%E2%80%95%E3%82%BF%E5%88%86%E6%9E%90-%E5%A1%9A%E6%9C%AC%E9%82%A6%E5%B0%8A/dp/4839965250"
                class="card-link" target="_blank">東京大学のデータサイエンティスト育成講座 ~Pythonで手を動かして学ぶデ―タ分析~</a>
        </div>
    </div>
    <div class="card bg-secondary job-card">
        <div class="card-header">2018年4月〜現在</div>
        <div class="card-body">
            <h4 class="card-title">個人事業</h4>
            <p class="card-text">
                個人事業として主に輸入物販事業をしています。またそれに関連して、スクリプトを用いた各種ECサイトからの情報収集や、輸入物販を効率化させるWebアプリケーションなどを作成しています。
                <h6 class="card-subtitle">輸入物販事業</h6>
                <div class="card-desc">
                    海外のショップから日本で売れる商品を在庫を持たずに出品し、注文が入れば仕入れてお客様に発送する、いわゆる無在庫輸入物販をしています。<br>
                    本事業はリサーチや出品にかかる作業や外注化を進める上での管理作業が煩雑になっていましたが、後述のアプリケーションで解決を図りました。
                </div>
                <h6 class="card-subtitle">アプリケーション開発</h6>
                <div class="card-desc">
                    前述の無在庫輸入物販での課題を解決するアプリケーション「BuppanFlow」を作成しました。 現在、外部公開は限定的にしておりますので、対面でよろしければご説明させていただくことが可能です。
                    <br> LPや簡単な技術的な説明もご用意しておりますので、下記リンクよりご覧ください。
                </div>
            </p>
            <a href="https://buppanflow.com" class="card-link" target="_blank">BuppanFlow（LPトップ）</a>
            <a href={{ route( 'aboutBuppanFlow') }} target="_blank">作品紹介「BuppanFlow」</a>
        </div>
    </div>
</div>

<h2>スキル</h2>
<div class="lg-section">
    <div id="myskills" class="introsec">
        <h3>Web制作</h3>
        <div class="myskillitems">
            <div class="myskillitem">
                <p>
                    <img src="img/html5.png" class="skillicon" />
                </p>
                <p class="skillname">
                    HTML
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/css3.png" class="skillicon" />
                </p>
                <p class="skillname">
                    CSS
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/javascript.png" class="skillicon" />
                </p>
                <p class="skillname">
                    JavaScript
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/php.png" class="skillicon" />
                </p>
                <p class="skillname">
                    PHP
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/Laravel.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Laravel
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/Vuejs.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Vue.js
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/mysql.png" class="skillicon" />
                </p>
                <p class="skillname">
                    MySQL
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/wordpress.png" class="skillicon" />
                </p>
                <p class="skillname">
                    WordPress
                </p>
            </div>
        </div>
        <h3>画像・映像編集</h3>
        <div class="myskillitems">
            <div class="myskillitem">
                <p>
                    <img src="img/photoshop.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Adobe Photoshop
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/illustrator.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Adobe Illustrator
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/premiere_pro.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Adobe Premiere Pro
                </p>
            </div>
        </div>
        <h3>その他</h3>
        <div class="myskillitems">
            <div class="myskillitem">
                <p>
                    <img src="img/python.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Python
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/jupyter.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Jupyter notebook
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/Google Cloud Platform.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Google Cloud Platform
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/bash.png" class="skillicon" />
                </p>
                <p class="skillname">
                    Bash Script
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/github.png" class="skillicon" />
                </p>
                <p class="skillname">
                    GitHub
                </p>
            </div>
            <div class="myskillitem">
                <p>
                    <img src="img/usaflag.jpg" class="skillicon" />
                </p>
                <p class="skillname">
                    English
                </p>
            </div>
        </div>
    </div>
</div>

<h2>作品</h2>
<div class="lg-section">
    <h3>物販情報管理アプリ「BuppanFlow」</h3>
    <div class="md-section">
        BuppanFlowは主に輸入物販を行う個人〜中小事業者向けの管理・情報アプリです。 詳細は以下リンクよりご覧ください。
        <br>
        <a href={{ route( 'aboutBuppanFlow') }} target="_blank">作品紹介「BuppanFlow」</a>
    </div>
</div>

<h2>将来</h2>
<div class="lg-section">
    <h3>キャリアについて</h3>
    <div class="md-section">
        今後は個人で仕事をしていくよりも、チームで協力し愛情を持ってプロダクトを育てたいと思っています。
        自社開発で面白いプロダクトを作られているところで自分が協力できたら本望ですので、もし私に興味を持っていただけましたら是非お声がけいただければと思います。
    </div>
    <h3>技術について</h3>
    <div class="md-section">
        フロントエンド技術やデータ分析について今後はより深く学んでいきたいと思っています。
    </div>
</div>

<h2>関連</h2>
<div class="lg-section">
    <a href="https://github.com/Miotava" class="card-link" target="_blank">GitHubアカウント</a>
</div>
@endsection

@section('customcss')
@endsection
