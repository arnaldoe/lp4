<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2 - Notas dos Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Cadastro de Alunos e Notas</h2>
        
        <form action="" method="POST" class="row g-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-md-3">
                    <input type="text" name="nome[]" class="form-control" placeholder="Nome do aluno" required>
                </div>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <div class="col-md-3">
                        <input type="number" name="nota[<?= $i ?>][]" class="form-control" placeholder="Nota <?= $j + 1 ?>" step="0.1" min="0" max="10" required>
                    </div>
                <?php endfor; ?>
            <?php endfor; ?>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Calcular Médias</button>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $alunos = [];
                $nomes = $_POST['nome'];
                $notas = $_POST['nota'];
                $erros = [];

                for ($i = 0; $i < 5; $i++) {
                    $nome = trim(htmlspecialchars($nomes[$i])); // Sanitiza nome
                    $notasAluno = array_map('floatval', $notas[$i]); // Garante valores numéricos
                    $media = array_sum($notasAluno) / count($notasAluno); // Calcula média

                    if (empty($nome)) {
                        $erros[] = "O nome do aluno na posição " . ($i + 1) . " está vazio.";
                    } elseif (isset($alunos[$nome])) {
                        $erros[] = "O nome '$nome' está duplicado.";
                    } else {
                        $alunos[$nome] = $media;
                    }
                }

                if (!empty($erros)) {
                    echo "<div class='alert alert-danger mt-3'>";
                    foreach ($erros as $erro) {
                        echo "<p>$erro</p>";
                    }
                    echo "</div>";
                } else {
                    arsort($alunos); // Ordena por média decrescente

                    echo "<div class='card mt-4 p-3 shadow-lg'>";
                    echo "<h3 class='text-center mb-3'>Resultados</h3>";
                    echo "<table class='table table-bordered'>";
                    echo "<thead class='table-dark'><tr><th>Aluno</th><th>Média</th></tr></thead><tbody>";

                    foreach ($alunos as $nome => $media) {
                        echo "<tr><td><strong>$nome</strong></td><td>" . number_format($media, 2) . "</td></tr>";
                    }

                    echo "</tbody></table></div>";
                }
            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
