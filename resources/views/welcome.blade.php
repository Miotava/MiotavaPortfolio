@extends('layouts.defaultLayout')

@section('title','Welcome! | Miotava\'s Portfolio')

@section('content')
<div class="main-title">
    <h1>Welcome to Miotava's Portforio Site!!</h1>
</div>

<h2>経歴</h2>
<div class="lg-section">
    ...
</div>

<h2>スキル</h2>
<div class="lg-section">
    ...
</div>

<h2>作品</h2>
<div class="lg-section">
    <h3>物販情報管理アプリ「BuppanFlow」</h3>
    <div class="md-section">
        BuppanFlowは主に輸入物販を行う個人〜中小事業者向けの管理・情報アプリです。
        詳細は以下リンクよりご覧ください。<br>
        <a href={{ route('aboutBuppanFlow') }} target="_blank">BuppanFlowの詳細</a>
    </div>
</div>

<h2>関連</h2>
<div class="lg-section">
</div>

@endsection

@section('customcss')
@endsection
