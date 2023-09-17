<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Add your meta tags, styles, and other head content here -->
</head>
<body>
    <!-- Include the cookie notice component -->
    @include('components.cookie-notice')


    <!-- Main content section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="copyright">
            &copy; {{ date('Y') }} Cool Tech
        </div>
    </footer>
</body>
</html>
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->