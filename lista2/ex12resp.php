<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado do Cálculo da Potência</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $base = isset($_POST["base"]) ? floatval($_POST["base"]) : 0;
            $expoente = isset($_POST["expoente"]) ? intval($_POST["expoente"]) : 0;

            // Calcular a potência (base^expoente)
            $resultado = pow($base, $expoente);
            
            echo "<p>A base <strong>$base</strong> elevada ao expoente <strong>$expoente</strong> resulta em: <strong>" . number_format($resultado, 2) . "</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
