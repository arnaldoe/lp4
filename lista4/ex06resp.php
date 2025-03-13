<?php
declare(strict_types=1);

function arredondarNumero(float $numero): float { // Função para arredondar um número
    return round($numero);
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["numero"]) || trim($_POST["numero"]) === "") { // Ver. declarada e dif de null & rm space do inicio/fim de uma str
            throw new Exception("O campo não pode estar vazio.");
        }

        $numero = floatval($_POST["numero"]); // get float da var.
        $numeroArredondado = arredondarNumero($numero);

        $resultado = "<p class='text-success'>O número <strong>$numero</strong> arredondado é <strong>$numeroArredondado</strong>.</p>";
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
    <title>Resultado: Arredondamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex06.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
