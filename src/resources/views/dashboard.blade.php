@extends('layouts.dashboard')

@section('title', 'ダッシュボード | POSSE WEB APP')

@section('body')
    <header class="h-16 px-8 flex items-center justify-between bg-white">
        {{-- ロゴ week表示 ログアウトボタン 記録・投稿ボタン --}}
        <div class="flex items-center gap-4">
            <div>
                <img src="{{ asset('images/posse-logo.svg') }}" alt="">
            </div>
            <p class="text-main-light-blue">4th week</p>
            <p class="text-main-light-blue">ログアウト</p>
        </div>
        <button class="posse-blue-gradation text-white px-16 py-3 rounded-full tracking-wide">記録・投稿</button>
    </header>
    <main class="bg-main-bg-grey h-full p-5 flex gap-5">
        <section class="w-1/2">
            {{-- 学習時間表示&日別学習時間棒グラフ --}}
            <div class="flex gap-5">
                {{-- 学習時間表示 --}}
                @include('components.hours_block', ['title' => 'Today', 'amount' => 3])
                @include('components.hours_block', ['title' => 'Month', 'amount' => 120])
                @include('components.hours_block', ['title' => 'Total', 'amount' => 1348])
            </div>
            <div>
                {{-- 日別学習時間棒グラフ --}}
            </div>
        </section>
        <section class="bg-white w-1/4 rounded-xl">
            {{-- 学習言語 --}}
        </section>
        <section class="bg-white w-1/4 rounded-xl">
            {{-- 学習コンテンツ --}}
        </section>
        <footer>
            {{-- 月表示 月移動ボタン --}}
        </footer>
    </main>
@endsection
