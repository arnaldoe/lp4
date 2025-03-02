<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado da Média das Notas</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $nota1 = isset($_POST["nota1"]) ? floatval($_POST["nota1"]) : 0;
            $nota2 = isset($_POST["nota2"]) ? floatval($_POST["nota2"]) : 0;
            $nota3 = isset($_POST["nota3"]) ? floatval($_POST["nota3"]) : 0;

            // Calcular a média
            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "<p>A média das notas é: <strong>$media</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
