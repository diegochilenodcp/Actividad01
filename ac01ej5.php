<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Generador de Nombres Aleatorios</h1>
    <?php
        // Función para generar nombres aleatorios
        function generarNombreAleatorio($nombres, $apellidos) {
            // Escoge un nombre aleatorio y lo formatea
            $nombre = ucfirst(strtolower($nombres[array_rand($nombres)]));
            // Escoge un apellido aleatorio y lo formatea
            $apellido = ucfirst(strtolower($apellidos[array_rand($apellidos)]));
            // Devuelve el nombre completo
            return "$nombre $apellido";
        }

        // Nombres y apellidos
        $nombres = array("juan", "pedro", "maría", "raúl");
        $apellidos = array("garcía", "martínez", "lópez", "sánchez");

        // Generamos y mostramos nombres aleatorios
        echo "<h2>Nombres Generados:</h2>";
        // Para cada número de nombre (1 a la cantidad total de nombres)
        for ($i = 1; $i <= count($nombres); $i++) {
            // Generamos un nombre aleatorio llamando a la función
            $nombre_completo = generarNombreAleatorio($nombres, $apellidos);
            // Mostramos el nombre en la página
            echo "<p>Nombre $i: $nombre_completo</p>";
        }
    ?>
</body>
</html>
