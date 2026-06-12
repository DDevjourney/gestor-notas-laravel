<!DOCTYPE html>
<html>

<head>
    <a href="{{ route('notas.index') }}">
        <title>App de notas</title>
    </a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<header class="bg-primary bg-gradient text-white p-3 mb-4">
    <div class="container">
        <h1 class="h2 m-0">App de notas</h1>
        @guest
            <a href="{{ route('show.login') }}" class="btn">Login</a>
            <a href="{{ route('show.register') }}" class="btn">Register</a>
        @endguest

        @auth
            <span class="border-r-2 pr-2">Hi, {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn">Logout</button>
            </form>
        @endauth
    </div>
</header>

<body class="bg-light d-flex flex-column min-vh-100 flex-grow-1">
    {{ $slot }} {{-- Es una variable especial en los componentes de Blade que representa el contenido que se pasa al
    componente.
    En este caso, el contenido de la vista 'notas.blade.php' se insertará en este punto del diseño. --}}
</body>

<footer class="bg-dark text-white mt-auto py-3">
    <div class="container text-center">
        <small>&copy; {{ date('Y') }} App de notas. Todos los derechos reservados.</small>
    </div>

</html>