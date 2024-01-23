<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    @if ($lista->isEmpty())
    <p>No hay ningun alumno en la BBDD.</p>
    @else
    <table>
        @foreach ($lista as $user)
            <tr>
                <td>{{$user['nom']}}</td>
                <td>{{$user['cognoms']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['actiu']}}</td>
                <td><a href="/alum/edit/{{$user['id']}}">Editar</a></td>
                <td>
                    <form action="{{ url('alum/' . $user['id'])}}" method="post">
                        @method("delete"   )
                        @csrf
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>   
        @endforeach 
    </table>
    @endif
    <a href="/alum/create">Crear nuevo usuario alumne</a>
</body>
</html>