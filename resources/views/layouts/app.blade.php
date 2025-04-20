<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AidHive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap + Tailwind + Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    @include('layouts.header')
    @include('layouts.navbar')

    <main class="container my-5">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
