<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="h-screen flex flex-col">
  @yield('body')
</body>
