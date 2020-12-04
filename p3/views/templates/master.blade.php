<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="/css/app.css?v=<?php echo time(); ?>">


    @yield('head')

</head>
<body>

    <header>
        <img id='logo' src='/images/logo.png' alt='Rock Scissors Paper Logo'>
        <h1>{{ $app->config('app.name') }}</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>
</html>
