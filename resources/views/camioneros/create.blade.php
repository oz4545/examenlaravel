<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Camionero</title>

</head>
<body>
    <h1>Crear Camionero</h1>
    <form action="{{ route('camioneros.store') }}" method="POST">
        @csrf
        <div>
            <label>DNI</label>
            <input type="text" name="dni" required>
        </div>
        <div>
            <label>Población</label>
            <input type="text" name="poblacion" required>
        </div>
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Teléfono</label>
            <input type="text" name="telefono" required>
        </div>
        <div>
            <label>Dirección</label>
            <input type="text" name="direccion" required>
        </div>
        <div>
            <label>Salario</label>
            <input type="text" name="salario" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

