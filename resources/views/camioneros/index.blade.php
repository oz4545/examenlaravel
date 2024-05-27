<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Camioneros</title>
    
</head>
<body>
    <h1>Lista de Camioneros</h1>
    <a href="{{ route('camioneros.create') }}">Crear Camionero</a>
    <ul>
        @foreach ($camioneros as $camionero)
            <li>
                <a href="{{ route('camioneros.show', $camionero->id) }}">{{ $camionero->nombre }}</a>
                <a href="{{ route('camioneros.edit', $camionero->id) }}">Editar</a>
                <form action="{{ route('camioneros.destroy', $camionero->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
