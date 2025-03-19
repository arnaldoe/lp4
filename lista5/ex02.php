<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2 - Notas dos Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="text-center mb-4">Cadastro de Alunos</h2>
    
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
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </div>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $alunos = [];
                $nomes = $_POST['nome'];
                $notas = $_POST['nota'];

                for ($i = 0; $i < 5; $i++) {
                    $media = array_sum($notas[$i]) / count($notas[$i]); // Calcula a média
                    $alunos[$nomes[$i]] = $media;
                }

                arsort($alunos); // Ordena os alunos pela média

                echo "<h3 class='mt-4'>Resultados:</h3>";
                echo "<ul class='list-group'>";
                foreach ($alunos as $nome => $media) {
                    echo "<li class='list-group-item d-flex justify-content-between'>
                            <strong>$nome</strong> <span>Média: " . number_format($media, 2) . "</span>
                          </li>";
                }
                echo "</ul>";

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
            }
        }
    ?>

</body>
</html>
