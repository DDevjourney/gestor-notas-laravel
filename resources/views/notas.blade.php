<!DOCTYPE html>
<html>

<head>
    <title>Mis notas</title>
</head>

<body>
    <h1>Lista de notas</h1>
    <p>Estas son mis notas:</p>
    <ul>
        @foreach ($notas as $nota)
            <li>{{ $nota->titulo }} - {{ $nota->contenido }}</li>
                <form action="/notas/{{ $nota->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                <a href="/notas/{{ $nota->id }}/edit">Editar</a>
        @endforeach
    </ul>
</body>

</html>