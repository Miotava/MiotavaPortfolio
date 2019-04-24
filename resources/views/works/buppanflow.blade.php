@extends('layouts.defaultLayout')

@section('title','BuppanFlowについて | Miotava\'s Portfolio')

@section('content')
<div class="main-title">
    <h1>作品紹介「BuppanFlow」</h1>
</div>

<h2>概要</h2>
<div class="lg-section">
    <p>BuppanFlowはもともと自分が行なっていた無在庫輸入物販をより効率的にするために開発したアプリです。</p>
    <p>CtoC系（Small BtoC含む）ECサイトの台頭や政府の副業推進政策による副業物販の浸透により、小規模かつチームを組んで行われる物販ビジネスのプレーヤー数の増加が見込まれます。<br>
        その結果、小規模な物販プレーヤーを支えるこのようなアプリが今後求められると予想しており、一定数の需要が見込めると思っています。</p>
    <p>なお、現在本アプリはアルファ版として自分や外注先、知り合いにのみ解放しています。</p>
    <p>作成したアプリのLPは以下のリンクよりご確認ください。</p>
    <div class="link-section">
        <a href="https://buppanflow.com" target="_blank">
            BuppanFlowのトップページ（LP）
        </a>
    </div>
</div>

<h2>機能</h2>
<div class="lg-section">
    <ul>
        <li>海外ブランドやショップなどの情報管理・検索</li>
        <li>ECショップでの売れ筋商品リサーチ</li>
        <li>リサーチ・出品・発送の作業担当者および彼らを束ねる管理者のための情報シェア・管理機能</li>
        <li>作業進捗が確認できる管理者ダッシュボード</li>
        <li>簡易的な利益管理機能</li>
    </ul>
</div>

<h2>技術</h2>
<div class="lg-section">
    <figure class="lg-section-main-image">
        <a href="/img/BuppanFlowDiagram.png" data-lity>
            <img src="/img/BuppanFlowDiagram.png">
        </a>
        <figcaption>概要図（クリックで拡大されます）</figcaption>
    </figure>
    <h3>バックエンド</h3>
    <h4>インフラ</h4>
    <div class="md-section tech-grid">
        <div class="card bg-secondary tech-card">
            <div class="card-header">Google Compute Engine</div>
            <div class="card-body">
                <p class="card-text">
                    以下2つのインスタンスを使用しデータの収集やリソースの制御などを行なっています。
                    <ul>
                        <li>常時起動しクローリングや、もう一方のインスタンス制御を行うMicroインスタンス</li>
                        <li>Microインスタンスでは処理が少し重いスクレイピング処理を担うStandardインスタンス</li>
                    </ul>
            </div>
        </div>
        <div class="card bg-secondary tech-card">
            <div class="card-header">Google Cloud SQL</div>
            <div class="card-body">
                <p class="card-text">Webから収集したデータの格納、BuppanFlowでユーザーが入力した内容の保存・読み出しなどを行なっています。1日毎に自動でバックアップされます。</p>
            </div>
        </div>
        <div class="card bg-secondary tech-card">
            <div class="card-header">Google Cloud Storage</div>
            <div class="card-body">
                <p class="card-text">
                    <p>
                        Webから収集したクローニングデータ（HTMLファイル）はZipで圧縮し、バケットに格納します。
                    </p>
                    <p>
                        Compute EngineのStandardインスタンスが起動した際にバケットからクローニングデータが読み出され、スクレイピング後に処理済フォルダに移動されます。
                    </p>
                </p>
            </div>
        </div>
        <div class="card bg-secondary tech-card">
            <div class="card-header">さくらレンタルサーバ</div>
            <div class="card-body">
                <p class="card-text">
                    Laravelが動作するプロダクション用Webサーバ（nginx）です。CI/CDなどは出来ておらず、sshでログインし、手動でGitからpullすることでデプロイしています。
                </p>
            </div>
        </div>
    </div>
    <h4>言語・フレームワーク</h4>
    <div class="md-section tech-grid">
        <div class="card bg-secondary tech-card">
            <div class="card-header">Laravel</div>
            <div class="card-body">
                <p class="card-text">ルーティング、ページビューの出力、ORMによるデータベース操作、認証、認可など。</p>
            </div>
        </div>
        <div class="card bg-secondary tech-card">
            <div class="card-header">Python</div>
            <div class="card-body">
                <p class="card-text">Compute Engine上のデフォルトで動作するPython2を使用しています。ローカルでのクローリングデータ解析ではJupyter
                    NotebookでPython3を使用することもあります。</p>
            </div>
        </div>
        <div class="card bg-secondary tech-card">
            <div class="card-header">Bash Script</div>
            <div class="card-body">
                <p class="card-text">Compute Engine上でCron Jobや他インスタンスの起動スクリプトを記述するために使用しています。</p>
            </div>
        </div>
    </div>
    <h3>フロントエンド</h3>
    <div class="md-section">
        <div class="md-section tech-grid">
            <div class="card bg-secondary tech-card">
                <div class="card-header">HTML5</div>
                <div class="card-body">
                    <p class="card-text">LaravelのテンプレートエンジンBladeによってHTMLを動的に出力しています。</p>
                </div>
            </div>
            <div class="card bg-secondary tech-card">
                <div class="card-header">CSS3/Sass</div>
                <div class="card-body">
                    <p class="card-text">WebPackベースでLaravelにデフォルトで同梱されているLaravel Mixを使うことにより、SassからCSSへプリコンパイルしています。
                    </p>
                </div>
            </div>
            <div class="card bg-secondary tech-card">
                <div class="card-header">JavaScript/jQuery/Vue.js</div>
                <div class="card-body">
                    <p class="card-text">
                        <p>
                            BuppanFlowではリサーチ結果や出品商品情報管理などユーザーによるフォーム操作が多く、開発当初はjQueryでフォームの動的追加などをしていましたが、現在はVue.jsへの移行を進めています。
                        </p>
                        <p>
                            すでに、Vue.jsでajax用ライブラリaxiosを用いた検索機能、Vue.js用のChart.jsラッパーライブラリのvue-chartjsなどを使用しグラフ描画機能などを実装しております。
                        </p>
                    </p>
                </div>
            </div>
            <div class="card bg-secondary tech-card">
                <div class="card-header">Bash Script</div>
                <div class="card-body">
                    <p class="card-text">Compute Engine上でCron Jobや他インスタンスの起動スクリプトを記述するために使用しています。</p>
                </div>
            </div>
        </div>
    </div>
    <h3>その他</h3>
    <div class="md-section">
        <div class="md-section tech-grid">
            <div class="card bg-secondary tech-card">
                <div class="card-header">GitHub</div>
                <div class="card-body">
                    <p class="card-text">ソースコードのバージョン管理のために使用。ローカルではSourcetreeのGUIで、本番環境ではCUIで操作しています。</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('customcss')
@endsection
