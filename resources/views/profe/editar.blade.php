<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Editar un usuario </h1>
    <form action="{{route('prof.update',[$profe->id])}}" method="post">
        @method("put")
        @csrf
        <label for = "id"> Indica tu id </label>
        <input type="text" name="id" value="{{$profe->id}}">
        <br>
        <label for = "nom"> Indica tu nombre </label>
        <input type="text" name="nom" value="{{$profe->nom}}">
        <br>
        <label for = "cognoms"> Indica tu apellido</label>
        <input type="text" name="cognoms" value="{{$profe->cognoms}}">
        <br>
        <label for = "email"> Indica tu email </label>
        <input type="email" name="email" value="{{$profe->email}}">
        <br>
        <label for = "password"> Indica tu password </label>
        <input type="password" name="password" value="{{$profe->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol" value="{{$profe->rol}}">
            <option value="profe">profe</option>
            <option value="alumnat">alumnat</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $profe->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
</body>
</html>