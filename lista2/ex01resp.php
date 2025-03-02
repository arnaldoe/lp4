<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado da Soma</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = isset($_POST["valor1"]) ? floatval($_POST["valor1"]) : 0;
        $valor2 = isset($_POST["valor2"]) ? floatval($_POST["valor2"]) : 0;
        $soma = $valor1 + $valor2;
        echo "<p>A soma de $valor1 + $valor2 é: <strong>$soma</strong></p>";
    }
    ?>
</body>
</html>
