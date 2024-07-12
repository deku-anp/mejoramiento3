<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Lista de viajeros</h1>
    <br>
    <a href="{{ route('traveler.create') }}">registrar viajero</a>
    <br>
    <br>
    <br>
    <table class="table" >
        <td>
            <h4>Id
        </td>
        <td>
            <h4>Dni
        </td>
        <td>
            <h4>Nombre
        </td>
        <td>
            <h4>Direccion
        </td>
        <td>
            <h4>Telefono
        </td>
        
        <td></td>
        <td></td>
        <td></td>
        @foreach ($travelers as $traveler)
            <tr>
                <td>{{ $traveler->id }}</td>
                <td>{{ $traveler->dni}}</td>
                <td>{{ $traveler->nombre}}</td>
                <td>{{ $traveler->direccion}}</td>
                <td>{{ $traveler->tfno}}</td>
                
                <td><a href="{{ route('traveler.show', $traveler->id) }}">Mostrar</a></td>
                <td><a href="{{ route('traveler.edit', $traveler->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('traveler.destroy', $traveler->id) }}" method="POST">
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