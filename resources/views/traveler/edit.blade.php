<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Actualizar viajeros</h1>
<br>
<form action="{{ route('traveler.update', $traveler) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label>
        Dni
        <br>
        <input type="text" name="dni" value="{{ old('dni', $traveler->dni) }}">
    </label>
    <br>
    <label>
        Numero plazas
        <br>
        <input type="text" name="nombre" value="{{ old('nombre', $traveler->nombre) }}">
    </label>
    <br>
    <label>
        Direccion
        <br>
        <input type="text" name="direccion" value="{{ old('direccion', $traveler->direccion) }}">
    </label>
    <br>
    <label>
        Telefono
        <br>
        <input type="text" name="tfno" value="{{ old('tfno', $traveler->tfno) }}">
    </label>
    <br>
    

    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>