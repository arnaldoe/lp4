<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos Juros Compostos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado dos Juros Compostos</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $capital = isset($_POST["capital"]) ? floatval($_POST["capital"]) : 0;
            $taxa = isset($_POST["taxa"]) ? floatval($_POST["taxa"]) : 0;
            $periodo = isset($_POST["periodo"]) ? floatval($_POST["periodo"]) : 0;

            // Calcular o montante com juros compostos
            $montante = $capital * pow((1 + $taxa / 100), $periodo);

            echo "<p>Capital inicial: <strong>R$ " . number_format($capital, 2, ',', '.') . "</strong></p>";
            echo "<p>Taxa de juros: <strong>$taxa%</strong></p>";
            echo "<p>Período: <strong>$periodo ano(s)</strong></p>";
            echo "<p>Montante com juros compostos: <strong>R$ " . number_format($montante, 2, ',', '.') . "</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
