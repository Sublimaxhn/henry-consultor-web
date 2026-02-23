<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

  <link rel="stylesheet" href="/build/assets/app.css">
<script type="module" src="/build/assets/app.js"></script>

</head>

<body class="bg-white text-gray-800">

    {{-- Navbar elegante --}}
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

</body>
</html>
