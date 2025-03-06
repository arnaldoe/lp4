<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Menor Valor e Posição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Menor Valor e Posição</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Get float dos valores declaradas
            $num1 = floatval($_POST['num1']); 
            $num2 = floatval($_POST['num2']);
            $num3 = floatval($_POST['num3']);
            $num4 = floatval($_POST['num4']);
            $num5 = floatval($_POST['num5']);
            $num6 = floatval($_POST['num6']);
            $num7 = floatval($_POST['num7']);

            $menor_valor = $num1; // Inicializa as variáveis para o menor valor e a posição
            $posicao = 1;

            // Compara os valores para encontrar o menor
            if ($num2 < $menor_valor) { $menor_valor = $num2; $posicao = 2; }
            if ($num3 < $menor_valor) { $menor_valor = $num3; $posicao = 3; }
            if ($num4 < $menor_valor) { $menor_valor = $num4; $posicao = 4; }
            if ($num5 < $menor_valor) { $menor_valor = $num5; $posicao = 5; }
            if ($num6 < $menor_valor) { $menor_valor = $num6; $posicao = 6; }
            if ($num7 < $menor_valor) { $menor_valor = $num7; $posicao = 7; }

            // Exibe o resultado
            echo "<p>O menor valor inserido foi: <strong>$menor_valor</strong></p>";
            echo "<p>A posição do menor valor na sequência é: <strong>$posicao</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
