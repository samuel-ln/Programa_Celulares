<!DOCTYPE html>
<html lang="es"> <!--se pone en español--> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlock Cell</title><!--Titulo de la pagina--> 
</head>
<body>
    <form action="validacion.php" method="post"><!--se crea un formulario, que se ira al archivo validacion.php con un metodo post para que pueda recibir los datos--> 
    <h1>Iniciar sesión</h1>
    <p>Usuario<input type="text" placeholder="Ingresar el usuario" name="usuario"></p>
    <p>Contraseña<input type="password" placeholder="Ingresar su contraseña" name="contraseña"></p>
    <input type="submit" value="Ingresar">
    </form>
</body>
</html>