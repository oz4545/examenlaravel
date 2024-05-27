<!-- resources/views/asignar_paquetes.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Paquetes a Camioneros</title>
</head>
<body>
    <h1>Asignar Paquetes a Camioneros</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('asignar_paquetes.store') }}" method="POST">
        @csrf
        <label for="paquete_id">Paquete:</label>
        <select name="paquete_id" id="paquete_id">
            @foreach($paquetes as $paquete)
                <option value="{{ $paquete->id }}">{{ $paquete->nombre }}</option>
            @endforeach
        </select>

        <label for="camionero_id">Camionero:</label>
        <select name="camionero_id" id="camionero_id">
            @foreach($camioneros as $camionero)
                <option value="{{ $camionero->id }}">{{ $camionero->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Asignar Paquete</button>
    </form>
</body>
</html>
