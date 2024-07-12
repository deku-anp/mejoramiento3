<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Lista de viajes</h1>
    <br>
    <a href="{{ route('travel.create') }}">registrar viaje</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>Codigo
        </td>
        <td>
            <h4>Numero plazas
        </td>
        <td>
            <h4>Fecha
        </td>
        <td>
            <h4>Otros datos
        </td>
        <td>
            <h4>Viajero_id
        </td>
        <td>
            <h4>Destino_id
        </td>
        <td>
            <h4>Origen_id
        </td>
        <td></td>
        <td></td>
        <td></td>
        @foreach ($travels as $travel)
            <tr>
                <td>{{ $travel->id }}</td>
                <td>{{ $travel->codigo }}</td>
                <td>{{ $travel->num_plazas}}</td>
                <td>{{ $travel->fecha}}</td>
                <td>{{ $travel->otros_datos }}</td>
                <td>{{ $travel->traveler_id}}</td>
                <td>{{ $travel->destination_id}}</td>
                <td>{{ $travel->origin_id}}</td>

                <td><a href="{{ route('travel.show', $travel->id) }}">Mostrar</a></td>
                <td><a href="{{ route('travel.edit', $travel->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('travel.destroy', $travel->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    </center>

</body>
</html>