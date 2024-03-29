<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{env('APP_NAME', 'Laravel Trains')}} | @yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="text-center my-5">
        <h1>Laravel Trains</h1>
    </header>

    <main class="container">
        @yield('main-content')
    </main>
</body>

</html>