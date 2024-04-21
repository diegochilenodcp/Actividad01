<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Generador de Números Primos Aleatorios</h1>
    <?php
        // Usanmos la funcion "esPrimo"
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            } // Usamos la raiz cuadrada del numero
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        // Nos pide 10 numeros a genrar
        $n = 10;
        // Usamos array para generar los numeros
        $numeros_primos = array();
        // Generamos 110 numeros primos aleatorios
        while (count($numeros_primos) < $n) {
            $numero = rand(1, 109);
            if (esPrimo($numero) && !in_array($numero, $numeros_primos)) {
                $numeros_primos[] = $numero;
            }
        }
        // Mostrar los numeros primos
        echo "<p>Los $n números primos generados de forma aleatoria son: ";
        echo implode(", ", $numeros_primos);
        echo "</p>";
    ?>
</body>
</html>
