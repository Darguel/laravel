<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar session de usuario </h1>
    <form method="POST" action="gestion_bbdd.php">
        <div>
            <label>
                Introduzca el id: 
            </label>
            <input type="int" name="id"/>
        </div>
        <div>
            <label>
                Introduzca el nombre: 
            </label>
            <input type="text" name="name"/>
        </div>
        <div>
            <label>
                Introduzca el apellido: 
            </label>
            <input type="text" name="surname"/>
        </div>
        <div>
            <label>
                Introduzca el contraseña: 
            </label>
            <input type="password" name="password"/>
        </div>
    </form>
    <div>
        <p>
            <a href="login.html">Log in</a>
        </p>
    </div>
</body>
</html>