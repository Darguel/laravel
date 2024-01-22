<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <h1>Lista de Profesores</h1>
    <table>
        @foreach ($lista as $user)
            <tr>
                <td>{{$user['nom']}}</td>
                <td>{{$user['cognoms']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['actiu']}}</td>
                <td><a href="/prof/edit/{{$user['id']}}">Editar</a></td>
                <td>
                    <form action="{{ url('prof/' . $user['id'])}}" method="post">
                        @method("delete"   )
                        @csrf
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>   
        @endforeach 
    </table>
    <a href="/prof/create">Crear nuevo usuario profesor</a>
</body>
</html>