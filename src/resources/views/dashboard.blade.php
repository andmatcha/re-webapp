<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ダッシュボード | POSSE WEB APP</title>
</head>

<body>
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
</body>

</html>
