<!DOCTYPE html>
<html>
<head>
    <title>Editar nota</title>
</head>
<body>
    <h1>Editar nota</h1>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    <form action="/notas/{{ $nota->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" placeholder="Título de la nota" value="{{ $nota->titulo }}">
        <textarea name="contenido" rows="5" cols="40" placeholder="Contenido de la nota">{{ $nota->contenido }}</textarea>
        <button type="submit">Editar</button>
    </form>
</body>
</html>