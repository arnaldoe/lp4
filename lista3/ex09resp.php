<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Cálculo do Fatorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Cálculo do Fatorial</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obtém o número informado
            $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

            if ($numero < 0) {
                echo "<p class='text-danger'>Por favor, insira um número válido maior ou igual a zero.</p>";
            } else {
                $fatorial = 1;

                for ($i = $numero; $i > 1; $i--) {
                    $fatorial *= $i; // = $fatorial = $fatorial * $i;
                }

                echo "<p>O fatorial de <strong>$numero</strong> é: <strong>$fatorial</strong></p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
