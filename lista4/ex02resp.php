<?php
declare(strict_types=1);

function converterTexto(string $palavra): array { // Função para converter a palavra em maiúsculas e minúsculas
    return [
        'maiuscula' => mb_strtoupper($palavra),
        'minuscula' => mb_strtolower($palavra)
    ];
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["palavra"]) || empty(trim($_POST["palavra"]))) { // ver se está declarada e dif de null & empty (espaços)
            throw new Exception("A palavra não pode estar vazia.");
        }

        $palavra = trim($_POST["palavra"]); // Remove espaços do inicio e fim de uma str
        $convertido = converterTexto($palavra);

        $resultado = "
            <p class='text-success'><strong>Original:</strong> $palavra</p>
            <p class='text-primary'><strong>Maiúsculas:</strong> {$convertido['maiuscula']}</p>
            <p class='text-warning'><strong>Minúsculas:</strong> {$convertido['minuscula']}</p>
        ";
    }
} catch (Exception $e) {
    $erro = "<p class='text-danger'>{$e->getMessage()}</p>";
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Converter Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex02.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
