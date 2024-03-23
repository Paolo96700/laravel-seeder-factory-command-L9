<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../../scss/app.scss">
    <title>Products</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    <main>
        @yield('contents')
    </main>
</body>
</html>