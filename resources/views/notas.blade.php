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

        @foreach ($notas as $nota)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $nota->titulo }}</h5>
                    <p class="card-text text-muted">{{ $nota->contenido }}</p>
                    <div class="d-flex gap-2">
                        <a href="/notas/{{ $nota->id }}/edit" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <form action="/notas/{{ $nota->id }}" method="POST">
                            @csrf
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