<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5: Cadastro de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Exercício 5: Cadastro de Livros</h2>
        <form action="" method="POST">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="titulo[]" placeholder="Título do Livro" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="quantidade[]" placeholder="Quantidade em Estoque" min="0" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $livros = [];
                $titulos = $_POST['titulo'];
                $quantidades = $_POST['quantidade'];

                for ($i = 0; $i < 5; $i++) { // Preencher o mapa
                    $titulo = trim($titulos[$i]);
                    $quantidade = intval($quantidades[$i]);

                    $livros[$titulo] = $quantidade;
                }

                ksort($livros); // Ordena os livros pelo título

                $alerta_baixa_quantidade = []; // Exibe alerta para livros com baixa quantidade
                foreach ($livros as $titulo => $quantidade) {
                    if ($quantidade < 5) {
                        $alerta_baixa_quantidade[] = $titulo;
                    }
                }

                if (!empty($alerta_baixa_quantidade)) {
                    echo "<div class='alert alert-warning mt-3'>";
                    echo "<strong>Atenção:</strong> Os seguintes livros estão com baixa quantidade em estoque (inferior a 5):<br>";
                    echo "<ul>";
                    foreach ($alerta_baixa_quantidade as $livro) {
                        echo "<li>$livro</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                }

                echo "<div class='card mt-4 p-3'>"; // Exibe a lista dos livros ordenados pelo título
                echo "<h3 class='text-center'>Lista de Livros</h3>";
                echo "<ul class='list-group'>";
                foreach ($livros as $titulo => $quantidade) {
                    echo "<li class='list-group-item'>
                            <strong>$titulo</strong> - Quantidade: $quantidade
                          </li>";
                }
                echo "</ul></div>";

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
