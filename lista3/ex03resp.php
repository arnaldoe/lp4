<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Ordem Crescente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado: Ordem Crescente</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os valores A e B do formulário
            $valorA = isset($_POST['valorA']) ? floatval($_POST['valorA']) : 0;
            $valorB = isset($_POST['valorB']) ? floatval($_POST['valorB']) : 0;

            // Verificar se os valores são iguais
            if ($valorA == $valorB) {
                echo "<p>Números iguais: <strong>$valorA</strong></p>";
            } else {
                // Ordenar os valores em ordem crescente
                $valores = [$valorA, $valorB];
                sort($valores);
                echo "<p>Valores em ordem crescente: <strong>{$valores[0]} {$valores[1]}</strong></p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
