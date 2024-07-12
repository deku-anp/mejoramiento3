<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Crear viajero</h1>
        <form action="{{route('traveler.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label>
                dni
                <br>
                <input type="text" name="dni">
            </label>
            <br>
            <label>
                Nombre
                <br>
                <input type="text" name="nombre">
            </label>
            <br>
            <label>
                Direccion
                <br>
                <input type="text" name="direccion">
            </label>
            <br>
            <label>
                Telefono
                <br>
                <input type="text" name="tfno">
            </label>
                    
            <br>
            <br>
            <button type="submit">Crear</button>
        </form>
    </center>
</body>
</html>