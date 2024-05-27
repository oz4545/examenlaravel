<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Camionero</title>

</head>
<body>
    <h1>Detalles del Camionero</h1>
    <p><strong>DNI:</strong> {{ $camionero->dni }}</p>
    <p><strong>Población:</strong> {{ $camionero->poblacion }}</p>
    <p><strong>Nombre:</strong> {{ $camionero->nombre }}</p>
    <p><strong>Teléfono:</strong> {{ $camionero->telefono }}</p>
    <p><strong>Dirección:</strong> {{ $camionero->direccion }}</p>
    <p><strong>Salario:</strong> {{ $camionero->salario }}</p>
    <a href="{{ route('camioneros.edit', $camionero->id) }}">Editar</a>
    <form action="{{ route('camioneros.destroy', $camionero->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
