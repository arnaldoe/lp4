<?php
declare(strict_types=1);

function converterTexto(string $palavra): array {
    return [
        'original'  => $palavra,
        'maiuscula' => mb_strtoupper($palavra),
        'minuscula' => mb_strtolower($palavra)
    ];
}

$erro = $resultado = "";

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["palavra"]) || empty(trim($_POST["palavra"]))) {
            throw new Exception("A palavra não pode estar vazia.");
        }

        $palavra = htmlspecialchars(trim($_POST["palavra"]), ENT_QUOTES, 'UTF-8');
        $convertido = converterTexto($palavra);

        $resultado = "
            <div class='text-center'>
                <p class='text-secondary'><strong>Original:</strong> {$convertido['original']}</p>
                <p class='text-primary'><strong>Maiúsculas:</strong> {$convertido['maiuscula']}</p>
                <p class='text-warning'><strong>Minúsculas:</strong> {$convertido['minuscula']}</p>
            </div>
        ";
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
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex02.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
