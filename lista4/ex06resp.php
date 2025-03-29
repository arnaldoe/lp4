<?php
declare(strict_types=1);

function arredondarNumero(float $numero): float {
    return round($numero);
}

$erro = $resultado = "";

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["numero"]) || trim($_POST["numero"]) === "") {
            throw new Exception("O campo não pode estar vazio.");
        }

        // Sanitização e conversão para float
        $numero = floatval($_POST["numero"]);

        // Arredondamento do número
        $numeroArredondado = arredondarNumero($numero);

        // Exibição do resultado
        $resultado = "<div class='text-center'>
            <p class='fw-bold'>Número Informado: <span class='text-primary'>" . htmlspecialchars((string) $numero) . "</span></p>
            <p class='text-success'><strong>Valor Arredondado: " . number_format($numeroArredondado, 0) . "</strong></p>
        </div>";
    }
} catch (Exception $e) {
    $erro = "<p class='text-danger text-center fw-bold'>{$e->getMessage()}</p>";
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Arredondamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex06.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
