<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado da Multiplicação</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $valor1 = isset($_POST["valor1"]) ? floatval($_POST["valor1"]) : 0;
            $valor2 = isset($_POST["valor2"]) ? floatval($_POST["valor2"]) : 0;
            $multiplicacao = $valor1 * $valor2;
            echo "<p>A multiplicação de $valor1 * $valor2 é: <strong>$multiplicacao</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
