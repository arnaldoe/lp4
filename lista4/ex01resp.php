<?php
declare(strict_types=1);

function contarCaracteres(string $palavra): int {
    return mb_strlen($palavra); // Dif de strlen() suporta caracteres especiais (é, ç, ñ) e caracteres multibyte (usados em línguas asiáticas).
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["palavra"]) || empty(trim($_POST["palavra"]))) { // ver se está declarada e dif de null & empty (espaços)
            throw new Exception("A palavra não pode estar vazia.");
        }

        $palavra = trim($_POST["palavra"]); // Remove espaços do inicio e fim de uma str
        $quantidade = contarCaracteres($palavra);

        $resultado = "<p>A palavra <strong>$palavra</strong> tem <strong>$quantidade</strong> caracteres.</p>";
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
    <title>Resultado: Contar Caracteres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex01.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
