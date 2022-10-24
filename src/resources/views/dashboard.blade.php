@extends('layouts.dashboard')

@section('title', 'ダッシュボード | POSSE WEB APP')

@section('body')
    <header class="h-20 px-8 flex items-center justify-between bg-white">
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
    <main class="bg-main-bg-grey h-full pt-5 px-5 flex gap-5">
        <section class="w-1/2 flex flex-col gap-5">
            {{-- 学習時間表示&日別学習時間棒グラフ --}}
            <div class="flex gap-5">
                {{-- 学習時間表示 --}}
                @include('components.hours_block', ['title' => 'Today', 'amount' => 3])
                @include('components.hours_block', ['title' => 'Month', 'amount' => 120])
                @include('components.hours_block', ['title' => 'Total', 'amount' => 1348])
            </div>
            <div class="bg-white rounded-xl grow w-full">
                {{-- 日別学習時間棒グラフ --}}
            </div>
        </section>
        <section class="bg-white w-1/4 rounded-xl px-5 py-8">
            <h3 class="font-bold text-2xl">学習言語</h3>
        </section>
        <section class="bg-white w-1/4 rounded-xl px-5 py-8">
            <h3 class="font-bold text-2xl">学習コンテンツ</h3>
        </section>
    </main>
    <footer class="h-24 w-full bg-main-bg-grey flex items-center justify-center gap-5">
        {{-- 月表示 月移動ボタン --}}
        <div class="w-6 h-6 text-main-light-blue">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
        </div>
        <p class="text-xl font-bold">2022年10月</p>
        <div class="w-6 h-6 text-main-blue">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
        </div>
    </footer>
@endsection
