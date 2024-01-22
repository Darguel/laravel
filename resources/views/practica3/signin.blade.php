<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar session de usuario </h1>
    <form action="/login" method="post">
        <div>
            <label for="email"> Email </label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="contrasenya"> Contraseña </label>
            <input type="password" id="contrasenya" name="password">
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label for="remember"> Remember</label>
        </div>
        <input type="submit" value="Enviar">
    </form>
    <a href="/signup"> Crear Usuario</a>
</body>
</html>