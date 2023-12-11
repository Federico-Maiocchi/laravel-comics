<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>comics</title>

</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <footer>
        footer
    </footer>
    
</body>
</html>