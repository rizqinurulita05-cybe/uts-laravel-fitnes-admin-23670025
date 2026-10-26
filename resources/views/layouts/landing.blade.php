<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head Component -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fitness Website Template')</title>

    <!-- Vendor CSS / Bootstrap (Sesuaikan jika template menggunakan framework CSS tertentu) -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/font-awesome.min.css') }}">

    <!-- Main CSS Landing -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Header / Menubar Component -->
    @include('layouts.partials.landing_header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('layouts.partials.landing_footer')

    <!-- Scripts Component -->
    <script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
