<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Editar un usuario </h1>
    <form action="{{route('alum.update',[$alumnat->id])}}" method="post">
        @method("put")
        @csrf
        <label for = "id"> Indica tu id </label>
        <input type="text" name="id" value="{{$alumnat->id}}">
        <br>
        <label for = "nom"> Indica tu nombre </label>
        <input type="text" name="nom" value="{{$alumnat->nom}}">
        <br>
        <label for = "cognoms"> Indica tu apellido</label>
        <input type="text" name="cognoms" value="{{$alumnat->cognoms}}">
        <br>
        <label for = "email"> Indica tu email </label>
        <input type="email" name="email" value="{{$alumnat->email}}">
        <br>
        <label for = "password"> Indica tu password </label>
        <input type="password" name="password" value="{{$alumnat->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol" value="{{$alumnat->rol}}">
            <option value="alumnat">alumnat</option>
            <option value="alumnat">alumnat</option>
        </select>
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu" value="{{ $alumnat->id ==1 ? 'checked' : ''}}">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
</body>
</html>