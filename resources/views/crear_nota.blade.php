<!DOCTYPE html>
<html>

<head>
    <title>Crear nota</title>
</head>

<body>
    <h1>Nueva nota</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/notas" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título de la nota"> 
        <textarea name="contenido" rows="5" cols="40" placeholder="Contenido de la nota"></textarea>
        <button type="submit">Crear</button>
    </form>
</body>

</html>