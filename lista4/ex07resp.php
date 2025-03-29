<?php
declare(strict_types=1);

function diferencaEntreDatas(string $data1, string $data2): int {
    $date1 = DateTime::createFromFormat('Y-m-d', $data1);
    $date2 = DateTime::createFromFormat('Y-m-d', $data2);

    if (!$date1 || !$date2) {
        throw new Exception("Formato de data inválido. Selecione uma data válida.");
    }

    $intervalo = $date1->diff($date2);
    return $intervalo->days;
}

$erro = $resultado = "";

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["data1"]) || empty($_POST["data2"])) {
            throw new Exception("Ambas as datas devem ser preenchidas.");
        }

        $data1 = $_POST["data1"];
        $data2 = $_POST["data2"];
        $diferenca = diferencaEntreDatas($data1, $data2);

        // Exibição do resultado
        $resultado = "<div class='text-center'>
            <p class='fw-bold'>Data Inicial: <span class='text-primary'>" . htmlspecialchars($data1) . "</span></p>
            <p class='fw-bold'>Data Final: <span class='text-primary'>" . htmlspecialchars($data2) . "</span></p>
            <p class='text-success'><strong>Diferença: $diferenca dia(s)</strong></p>
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
    <title>Resultado: Diferença entre Datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex07.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
