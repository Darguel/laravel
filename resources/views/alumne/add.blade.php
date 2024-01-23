<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Crear un usuario Alumne </h1>
    <form action="/mostrarInfo" method="post">
        <label for = "id"> Indica tu id </label>
        <input type="text" name="id">
        <br>
        <label for = "nom"> Indica tu nombre </label>
        <input type="text" name="nom">
        <br>
        <label for = "cognom"> Indica tu apellido</label>
        <input type="text" name="cognom">
        <br>
        <label for = "email"> Indica tu email </label>
        <input type="email" name="email">
        <br>
        <label for = "password"> Indica tu password </label>
        <input type="password" name="password">        
        <br>
        <label for = "rol"> Indica tu rol </label>
        <input type="rol" name="rol">        
        <br>
        <label for="actiu"> Actiu? </label>
        <input type="checkbox" name="actiu">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
</body>
</html>