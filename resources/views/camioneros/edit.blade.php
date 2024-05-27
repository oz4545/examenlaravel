<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Camionero</title>
    
</head>
<body>
    <h1>Editar Camionero</h1>
    <form action="{{ route('camioneros.update', $camionero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>DNI</label>
            <input type="text" name="dni" value="{{ $camionero->dni }}" required>
        </div>
        <div>
            <label>Población</label>
            <input type="text" name="poblacion" value="{{ $camionero->poblacion }}" required>
        </div>
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $camionero->nombre }}" required>
        </div>
        <div>
            <label>Teléfono</label>
            <input type="text" name="telefono" value="{{ $camionero->telefono }}" required>
        </div>
        <div>
            <label>Dirección</label>
            <input type="text" name="direccion" value="{{ $camionero->direccion }}" required>
        </div>
        <div>
            <label>Salario</label>
            <input type="text" name="salario" value="{{ $camionero->salario }}" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
