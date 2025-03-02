<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Menor Valor e Posição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado: Menor Valor e Posição</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Criar um array para armazenar os 7 números
            $numeros = [];
            for ($i = 1; $i <= 7; $i++) {
                $numeros[] = isset($_POST["num$i"]) ? floatval($_POST["num$i"]) : 0;
            }

            // Encontrar o menor valor e a posição
            $menor_valor = min($numeros);
            $posicao = array_search($menor_valor, $numeros) + 1; // A posição começa de 1

            // Exibir o resultado
            echo "<p>O menor valor inserido foi: <strong>$menor_valor</strong></p>";
            echo "<p>A posição do menor valor na sequência é: <strong>$posicao</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
