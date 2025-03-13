<?php
declare(strict_types=1);

function calcularRaiz(float $numero): float { // Função para calcular a raiz quadrada de um número
    if ($numero < 0) {
        throw new Exception("Não é possível calcular a raiz quadrada de um número negativo.");
    }
    return sqrt($numero);
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["numero"]) || trim($_POST["numero"]) === "") { // Ver. declarada e dif de null & rm space do inicio/fim de uma str
            throw new Exception("O campo não pode estar vazio.");
        }

        $numero = floatval($_POST["numero"]); // get float da var.
        $raiz = calcularRaiz($numero);

        $resultado = "<p class='text-success'>A raiz quadrada de <strong>$numero</strong> é <strong>" . number_format($raiz, 2) . "</strong>.</p>";
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
    <title>Resultado: Raiz Quadrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex05.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
