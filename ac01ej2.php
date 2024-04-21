<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Inicia Sesion</h1>
    <!-- Creamos un formulario... -->
    <form action="ac01ej2.php" method="POST">
        <label for="usuario">Nombre de Usuario:</label>
        <!-- Ingresamos nombre de usuarioo -->
        <input type="text" id="usuario" name="usuario" required>
        <label for="contrasena">Contraseña:</label>
        <!-- Aqui la contraseña -->
        <input type="password" id="contrasena" name="contrasena" required>
        <!-- El boton para darle click -->
        <input type="submit" value="Iniciar Sesión">
    </form>

    <?php
        // Verificamos si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // recopilamos lo enviado
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contrasena'];

            // Usuario y contra si son validos
            $usuarios_validos = array("juan", "pedro", "maria", "raul");
            $contraseña_valida = "D153n0W3b2”";
 
            // Si esta todo ok! Mencionamos ¡Bienvenido de nuevo
            if (in_array($usuario, $usuarios_validos) && $contraseña === $contraseña_valida) {
                echo "<p>¡Bienvenido de nuevo, $usuario!</p>";
            } else {
                // Si no, lo siento, no puedes entrar
                echo "<p>Oops, parece que tu nombre de usuario o contraseña son incorrectos. ¿Por qué no lo intentas de nuevo?</p>";
            }
        }
    ?>
</body>
</html>
