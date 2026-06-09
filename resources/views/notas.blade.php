<!DOCTYPE html>
<html>

<head>
    <title>Mis notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Mis notas</h1>
            <a href="/crear_nota" class="btn btn-primary">+ Nueva nota</a>
        </div>

        @foreach ($notas as $nota)  {{-- Recorre el array $notas y crea una variable $nota para cada elemento del array.
            Cada $nota representa una nota individual. --}}
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $nota->titulo }}</h5> {{-- Accede al título de la nota usando $nota->titulo, ya
                    que Eloquent convierte cada registro de la base de datos en un objeto,
                    y los campos de la tabla se pueden acceder como propiedades del objeto. Se puede acceder a estos campos
                    porque una de las migraciones define estos
                    campos como propiedades del modelo. . --}}
                    <p class="card-text text-muted">{{ $nota->contenido }}</p>
                    <div class="d-flex gap-2">
                        <a href="/notas/{{ $nota->id }}/edit" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <form action="/notas/{{ $nota->id }}" method="POST">
                            @csrf {{-- Es una directiva Blade que sustituye al PHP tradicional por una síntaxis más limpia. En este caso,
                            genera un campo oculto con un token de seguridad para proteger contra ataques CSRF (Cross-Site Request Forgery). --}}
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>