<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    {{-- ALPINEJS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- TAILWINDCSS --}}
    <link rel="stylesheet" href="/build/assets/build.css">

    @vite('resources/css/app.css')

    {{-- ICONS --}}
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

    {{-- TRIX --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
</head>

<body>
    <main class="bg-[#FEFEFE]">
        @yield('dashboard_content')
    </main>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>


    {{-- CUSTOM JS --}}
    <script src="/js/script.js"></script>
    <script src="/build/aseets/build.js"></script>

</body>

</html>
