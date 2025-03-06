<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Soma com While</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Soma com While</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obtém o número informado
            $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

            if ($numero < 1) {
                echo "<p class='text-danger'>Por favor, insira um número válido maior que zero.</p>";
            } else {
                $soma = 0;
                $i = 1;

                while ($i <= $numero) {
                    $soma += $i;
                    $i++;
                }

                echo "<p>A soma dos números de 1 até $numero é: <strong>$soma</strong></p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
