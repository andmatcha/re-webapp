@extends('layouts.dashboard')

@section('title', 'ダッシュボード | POSSE WEB APP')

@section('body')
    <header>
        {{-- ロゴ week表示 ログアウトボタン 記録・投稿ボタン --}}
    </header>
    <main>
        <section>
            {{-- 学習時間表示&日別学習時間棒グラフ --}}
            <div>
                {{-- 学習時間表示 --}}
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div>
                {{-- 日別学習時間棒グラフ --}}
            </div>
        </section>
        <section>
            {{-- 学習言語 --}}
        </section>
        <section>
            {{-- 学習コンテンツ --}}
        </section>
    </main>
    <footer>
        {{-- 月表示 月移動ボタン --}}
    </footer>
@endsection
