<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Preço com Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado do Preço com Desconto</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $preco = isset($_POST["preco"]) ? floatval($_POST["preco"]) : 0;
            $desconto = isset($_POST["desconto"]) ? floatval($_POST["desconto"]) : 0;

            // Calcular o valor do desconto
            $valorDesconto = $preco * ($desconto / 100);
            $precoComDesconto = $preco - $valorDesconto;

            echo "<p>Preço original: <strong>R$ " . number_format($preco, 2, ',', '.') . "</strong></p>";
            echo "<p>Desconto de $desconto%: <strong>R$ " . number_format($valorDesconto, 2, ',', '.') . "</strong></p>";
            echo "<p>Preço com desconto: <strong>R$ " . number_format($precoComDesconto, 2, ',', '.') . "</strong></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
