<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado da Conversão</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dias = isset($_POST["dias"]) ? floatval($_POST["dias"]) : 0;

            // Converter dias para horas, minutos e segundos
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;

            echo "<p>Valor em dias: <strong>$dias dias</strong></p>";
            echo "<p>Equivalente em horas: <strong>" . number_format($horas, 2, ',', '.') . " horas</strong></p>";
            echo "<p>Equivalente em minutos: <strong>" . number_format($minutos, 2, ',', '.') . " minutos</strong></p>";
            echo "<p>Equivalente em segundos: <strong>" . number_format($segundos, 2, ',', '.') . " segundos</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
