<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow-lg p-4">
        <h2 class="text-center">Cadastro de Livros</h2>
        <form action="" method="POST" class="row g-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="titulo[]" placeholder="Título do Livro" required>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="quantidade[]" placeholder="Quantidade em Estoque" min="0" required>
                </div>
            <?php endfor; ?>
            <div class="col-12">
                <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            try {
                $resultado = processarLivros($_POST['titulo'] ?? [], $_POST['quantidade'] ?? []);

                if (!empty($resultado['erros'])) {
                    echo "<div class='alert alert-danger mt-3'>";
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p>$erro</p>";
                    }
                    echo "</div>";
                } else {
                    if (!empty($resultado['alerta'])) {
                        exibirAlertaBaixaQuantidade($resultado['alerta']);
                    }
                    exibirTabelaLivros($resultado['lista']);
                }

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }

        function processarLivros(array $titulos, array $quantidades): array {
            $livros = [];
            $erros = [];
            $alertaBaixa = [];

            for ($i = 0, $n = count($titulos); $i < $n; $i++) {
                $titulo = trim(htmlspecialchars((string) ($titulos[$i] ?? '')));
                $quantidade = intval($quantidades[$i] ?? 0);

                if (empty($titulo)) {
                    $erros[] = "O título do livro na posição " . ($i + 1) . " está vazio.";
                    continue;
                }

                if (isset($livros[$titulo])) {
                    $erros[] = "O livro '$titulo' já foi cadastrado.";
                    continue;
                }

                if ($quantidade < 5) {
                    $alertaBaixa[] = $titulo;
                }

                $livros[$titulo] = $quantidade;
            }

            ksort($livros);

            return ['lista' => $livros, 'alerta' => $alertaBaixa, 'erros' => $erros];
        }

        function exibirAlertaBaixaQuantidade(array $alerta): void {
            echo "<div class='alert alert-warning mt-3'>";
            echo "<h5><strong>Atenção!</strong> Baixa quantidade em estoque:</h5>";
            echo "<ul>";
            foreach ($alerta as $livro) {
                echo "<li><strong>$livro</strong></li>";
            }
            echo "</ul>";
            echo "</div>";
        }

        function exibirTabelaLivros(array $livros): void {
            echo "<div class='card mt-4 p-3 shadow-lg'>";
            echo "<h3 class='text-center mb-3'>Lista de Livros</h3>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='table-dark'><tr><th>Título</th><th>Quantidade</th></tr></thead><tbody>";

            foreach ($livros as $titulo => $quantidade) {
                echo "<tr><td><strong>$titulo</strong></td><td>$quantidade</td></tr>";
            }

            echo "</tbody></table></div>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
