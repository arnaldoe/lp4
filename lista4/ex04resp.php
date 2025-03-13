<?php
declare(strict_types=1);

// Função para validar a data e formatá-la corretamente
function validarData(int $dia, int $mes, int $ano): string {
    if (!checkdate($mes, $dia, $ano)) { // valida uma data grtegoriana
        throw new Exception("A data informada não é válida.");
    }
    return sprintf("%02d/%02d/%04d", $dia, $mes, $ano); // Return str formatada
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["dia"], $_POST["mes"], $_POST["ano"])) { // Ver. se está declarada e dif de null
            throw new Exception("Todos os campos devem ser preenchidos.");
        }

        $dia = intval($_POST["dia"]); // get int da var.
        $mes = intval($_POST["mes"]);
        $ano = intval($_POST["ano"]);

        $dataFormatada = validarData($dia, $mes, $ano);
        $resultado = "<p class='text-success'>A data informada é válida: <strong>$dataFormatada</strong>.</p>";
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
    <title>Resultado: Validação de Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex04.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
