<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Crear viaje</h1>
        <form action="{{route('travel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label>
                Codigo
                <br>
                <input type="text" name="codigo">
            </label>
            <br>
            <label>
                Numero plazas
                <br>
                <input type="text" name="num_plazas">
            </label>
            <br>
            <label>
                Fecha
                <br>
                <input type="text" name="fecha_nac">
            </label>
            <br>
            <label>
                Otros datos
                <br>
                <input type="text" name="posicion">
            </label>
            <br>
            <label>
                Viajero_id
                <br>
                <input type="text" name="traveler_id">
            </label>
            <br>
            <label>
                Destino_id
                <br>
                <input type="text" name="destination_id">
            </label>
            <br>
            <label>
                Origen_id
                <br>
                <input type="text" name="origin_id">
            </label>
        
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>