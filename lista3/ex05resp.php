<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Nome do Mês</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Nome do Mês</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obtém o número do mês do formulário
            $numeroMes = isset($_POST['numeroMes']) ? intval($_POST['numeroMes']) : 0;
            $nomeMes = "";

            switch ($numeroMes) { // Estrutura switch para determinar o nome do mês
                case 1:  $nomeMes = "Janeiro"; break;
                case 2:  $nomeMes = "Fevereiro"; break;
                case 3:  $nomeMes = "Março"; break;
                case 4:  $nomeMes = "Abril"; break;
                case 5:  $nomeMes = "Maio"; break;
                case 6:  $nomeMes = "Junho"; break;
                case 7:  $nomeMes = "Julho"; break;
                case 8:  $nomeMes = "Agosto"; break;
                case 9:  $nomeMes = "Setembro"; break;
                case 10: $nomeMes = "Outubro"; break;
                case 11: $nomeMes = "Novembro"; break;
                case 12: $nomeMes = "Dezembro"; break;
                default: $nomeMes = "Número inválido! Digite um valor entre 1 e 12."; break;
            }

            echo "<p><strong>Mês correspondente:</strong> $nomeMes</p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
