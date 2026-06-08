<!DOCTYPE html>
<html>
<head>
    <title>Crear nota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Nueva nota</h1>
            <a href="/notas" class="btn btn-outline-secondary btn-sm">← Volver</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="/notas" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Título de la nota">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Contenido</label>
                        <textarea name="contenido" rows="5" class="form-control" placeholder="Contenido de la nota"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Crear nota</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>