<?php
declare(strict_types=1);

function diferencaEntreDatas(string $data1, string $data2): int { // Função para calcular a dif de dias entre duas datas
    $formato = 'd/m/Y';

    // Converte strings para objetos DateTime
    $date1 = DateTime::createFromFormat($formato, $data1); 
    $date2 = DateTime::createFromFormat($formato, $data2);

    if (!$date1 || !$date2) { // Verifica se as datas são válidas
        throw new Exception("Formato de data inválido. Use dd/mm/YYYY.");
    }

    $intervalo = $date1->diff($date2); // diff = Função interna que calcula a dif entre dois DateTime

    return $intervalo->days;
}

$erro = $resultado = ""; // 2 Var para armazenar erro e resultado Inicializadas como strings vazias ("")

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["data1"], $_POST["data2"]) || trim($_POST["data1"]) === "" || trim($_POST["data2"]) === "") {
            throw new Exception("Ambas as datas devem ser preenchidas.");
        }

        $data1 = $_POST["data1"];
        $data2 = $_POST["data2"];

        $diferenca = diferencaEntreDatas($data1, $data2);
        $resultado = "<p class='text-success'>A diferença entre as datas é de <strong>$diferenca</strong> dia(s).</p>";
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
    <title>Resultado: Diferença entre Datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Resultado</h2>
            <?= $erro ?: $resultado ?>
            <a href="ex07.php" class="btn btn-secondary w-100 mt-3">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
