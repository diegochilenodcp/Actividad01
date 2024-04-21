<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Análisis de Frase</h1>
    <!-- Creamos el formulario para que verifique la frase dada -->
    <form action="ac01ej4.php" method="POST">
        <label for="frase">Ingresa una frase:</label>
        <input type="text" id="frase" name="frase" required><br><br>
        <input type="submit" value="Analizar">
    </form>

    <?php
            // Usamos variable superglobal para verificar si la pag es POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST['frase'];
            // Convertimos la frase a minuscula
            $frase = strtolower($frase);

            // Contamos las veces que aparece la letra 'o'
            $conteo_o = substr_count($frase, 'o');
            echo "<p>La letra 'o' en la frase <strong>$frase</strong> aparece  → $conteo_o </p>";

            // Extraemos las vocales de la frase
            $vocales = ['a', 'e', 'i', 'o', 'u'];
            $vocales_frase = preg_match_all('/['.implode('', $vocales).']/', $frase, $matches);

            $vocales_encontradas = implode('', $matches[0]);
            $total_vocales = strlen($vocales_encontradas);

            echo "<p>Las vocales en la frase <strong>$frase</strong> que aparecen  → '" . implode(', ', $matches[0]) . "' son →  $total_vocales</p>";
         
            // Contamos las veces que aparece cada vocal
            $conteo_vocales = array_count_values(str_split($frase));
            foreach ($vocales as $vocal) {
                if (isset($conteo_vocales[$vocal])) {
                    echo "<p>La vocal en la frase <strong>$frase</strong> '$vocal' aparece  →". $conteo_vocales[$vocal] . "</p>";
                }
            }
        }
    ?>
</body>
</html>
