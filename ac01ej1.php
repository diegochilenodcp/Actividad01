<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <?php
        // Obtendremos el agente de usuario del navegador
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        // Ahora, vamos a mostrar en la web que navegador esta usando el usuario o cliente
        echo "<p>¡Hola! Usted esta usando eel siguiente navegador: $user_agent</p>";
    ?>
</body>
</html>

