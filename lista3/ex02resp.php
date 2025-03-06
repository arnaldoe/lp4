<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Soma dos Valores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado: Soma dos Valores</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verif se valor foi declaro and dif de null & get float
            $valor1 = isset($_POST['valor1']) ? floatval($_POST['valor1']) : 0;
            $valor2 = isset($_POST['valor2']) ? floatval($_POST['valor2']) : 0;

            $soma = $valor1 + $valor2;

            if ($valor1 == $valor2) { // Se os valores forem iguais, retornar o triplo da soma
                $resultado = 3 * $soma;
                echo "<p>Resultado final: <strong>$resultado</strong></p>";
            } else {
                $resultado = $soma;
                echo "<p>A soma dos valores é: <strong>$soma</strong></p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
