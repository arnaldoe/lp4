<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Desconto no Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Desconto no Produto</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obter o valor do produto do formulário
            $valorProduto = isset($_POST['valorProduto']) ? floatval($_POST['valorProduto']) : 0;

            if ($valorProduto > 100) { // Aplicar o desconto de 15% se o valor for maior que R$100,00
                $desconto = $valorProduto * 0.15;
                $novoValor = $valorProduto - $desconto;
                echo "<p>Valor original: <strong>R$ " . number_format($valorProduto, 2, ',', '.') . "</strong></p>";
                echo "<p>Desconto aplicado (15%): <strong>R$ " . number_format($desconto, 2, ',', '.') . "</strong></p>";
                echo "<p><strong>Valor final: R$ " . number_format($novoValor, 2, ',', '.') . "</strong></p>";
            } else {
                echo "<p>O valor do produto é <strong>R$ " . number_format($valorProduto, 2, ',', '.') . "</strong> e não há desconto aplicado.</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
