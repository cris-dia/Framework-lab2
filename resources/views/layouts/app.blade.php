<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'To-Do App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <header class="bg-primary text-white py-3">
        <div class="container">
            <nav class="d-flex justify-content-between">
                <a href="{{ route('home') }}" class="text-white text-decoration-none fw-bold">Acasă</a>
                <a href="{{ route('about') }}" class="text-white text-decoration-none fw-bold">Despre noi</a>
                <a href="{{ route('tasks.index') }}" class="text-white text-decoration-none fw-bold">Sarcini</a>
            </nav>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} To-Do App. Toate drepturile rezervate.</p>
    </footer>
</body>

</html>
