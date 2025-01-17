<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('ressources/js/nav.js')
    <title>@yield('title', 'Goat production')</title>
</head>

<body class="h-screen relative mx-7 my-1 uppercase flex flex-col ">
    <div class=" w-[80%] mx-auto flex-1 flex flex-col gap-pd-700 ">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
</body>
@stack('scripts')

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu-mobile');
        menu.classList.toggle('hidden');
    }
</script>

</html>
