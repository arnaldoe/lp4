<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Contagem com Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Contagem com Loop</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obtém o número informado
            $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

            if ($numero < 1) {
                echo "<p class='text-danger'>Por favor, insira um número válido maior que zero.</p>";
            } else {
                echo "<p><strong>Números de 1 até $numero:</strong></p>";
                echo "<p>";
                for ($i = 1; $i <= $numero; $i++) {
                    echo "$i ";
                }
                echo "</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
