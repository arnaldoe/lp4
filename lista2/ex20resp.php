<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Velocidade Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado da Velocidade Média</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Receber os dados do formulário
            $distancia = isset($_POST["distancia"]) ? floatval($_POST["distancia"]) : 0;
            $tempo = isset($_POST["tempo"]) ? floatval($_POST["tempo"]) : 0;

            // Verificar se o tempo não é zero para evitar divisão por zero
            if ($tempo > 0) {
                $velocidade = $distancia / $tempo;
                echo "<p>Distância percorrida: <strong>$distancia km</strong></p>";
                echo "<p>Tempo gasto: <strong>$tempo horas</strong></p>";
                echo "<p>Velocidade média: <strong>" . number_format($velocidade, 2, ',', '.') . " km/h</strong></p>";
            } else {
                echo "<p><strong>Erro:</strong> O tempo não pode ser zero ou negativo.</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
