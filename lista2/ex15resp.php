<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado do IMC</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $peso = isset($_POST["peso"]) ? floatval($_POST["peso"]) : 0;
            $altura = isset($_POST["altura"]) ? floatval($_POST["altura"]) : 0;

            // Calcular o IMC
            $imc = $peso / ($altura * $altura);

            echo "<p>Seu IMC é: <strong>" . number_format($imc, 2) . "</strong></p>";

            // Classificação do IMC
            if ($imc < 18.5) {
                echo "<p><strong>Classificação:</strong> Abaixo do peso</p>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<p><strong>Classificação:</strong> Peso normal</p>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<p><strong>Classificação:</strong> Sobrepeso</p>";
            } else {
                echo "<p><strong>Classificação:</strong> Obesidade</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
