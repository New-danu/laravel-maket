<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Komek Cinema</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main class="container">

    @include('particle.header')

    @yield('content')

    @include('particle.footer')
</main>


</body>
</html>
