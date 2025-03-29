<?php
declare(strict_types=1);

/**
 * Valida a data e retorna formatada no padrão DD/MM/AAAA.
 */
function validarData(int $dia, int $mes, int $ano): string {
    if (!checkdate($mes, $dia, $ano)) {
        throw new Exception("A data informada não é válida.");
    }
    return sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
}

$erro = $resultado = "";

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validação das entradas
        if (!isset($_POST["dia"], $_POST["mes"], $_POST["ano"])) {
            throw new Exception("Todos os campos devem ser preenchidos.");
        }

        // Sanitização e conversão para inteiro
        $dia = intval($_POST["dia"]);
        $mes = intval($_POST["mes"]);
        $ano = intval($_POST["ano"]);

        // Validação e formatação da data
        $dataFormatada = validarData($dia, $mes, $ano);

        // Mensagem de sucesso
        $resultado = "<div class='text-center'>
            <p class='fw-bold'>Data Informada: <span class='text-primary'>$dataFormatada</span></p>
            <p class='text-success'><strong>A data é válida!</strong></p>
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
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex04.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
