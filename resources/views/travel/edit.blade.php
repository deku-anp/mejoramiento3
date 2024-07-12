<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

<h1>Actualizar viajes</h1>
<br>
<form action="{{ route('travel.update', $travel) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label>
        Codigo
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $travel->codigo) }}">
    </label>
    <br>
    <label>
        Numero plazas
        <br>
        <input type="text" name="num_plazas" value="{{ old('num_plazas', $travel->num_plazas) }}">
    </label>
    <br>
    <label>
        Fecha 
        <br>
        <input type="text" name="fecha" value="{{ old('fecha', $travel->fecha) }}">
    </label>
    <br>
    <label>
        Otros datos
        <br>
        <input type="text" name="otros_datos" value="{{ old('otros_datos', $travel->otros_datos) }}">
    </label>
    <br>
    <label>
        Viajero_id
        <br>
        <input type="text" name="traveler_id" value="{{ old('traveler_id', $travel->traveler_id) }}">
    </label>
    <br>
    <label>
        Destino_id
        <br>
        <input type="text" name="destination_id" value="{{ old('destination_id', $travel->destination_id) }}">
    </label>
    <br>
    <label>
        Origen_id
        <br>
        <input type="text" name="origin_id" value="{{ old('origin_id', $travel->origin_id) }}">
    </label>


    <br>
    <br>

    <button type="submit">Actualizar</button>

    </center>
</form>
</body>
</html>