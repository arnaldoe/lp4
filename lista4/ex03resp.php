<?php
declare(strict_types=1);

// Função para ver se a segunda palavra está contida na primeira, case-insensitive
function verificarSubstring(string $palavra1, string $palavra2): bool {
    return mb_stripos($palavra1, $palavra2) !== false;
}

// Por que !== false? A função pode retornar 0 se a substring for encontrada no início da string. 
// 0 em PHP pode ser interpretado como false, !== false garante que qualquer posição encontrada seja considerada válida.

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["palavra1"], $_POST["palavra2"]) || empty(trim($_POST["palavra1"])) || empty(trim($_POST["palavra2"]))) {
            throw new Exception("Ambas as palavras devem ser preenchidas.");
        }

        $palavra1 = trim($_POST["palavra1"]); // Remove espaços do inicio e fim de uma str
        $palavra2 = trim($_POST["palavra2"]);
        $contida = verificarSubstring($palavra1, $palavra2);

        $mensagem = $contida // Operador ternário é um atalho para um if
            ? "<p class='text-success'>A palavra <strong>$palavra2</strong> está contida em <strong>$palavra1</strong>.</p>"
            : "<p class='text-danger'>A palavra <strong>$palavra2</strong> não está contida em <strong>$palavra1</strong>.</p>";

        $resultado = $mensagem;
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
    <title>Resultado: Verificar Substring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex03.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
