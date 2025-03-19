<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Cadastro de Produtos</h2>
        <form action="" method="POST">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="codigo[]" placeholder="Código do Produto" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nome[]" placeholder="Nome do Produto" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="preco[]" placeholder="Preço do Produto" step="0.01" min="0" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $produtos = [];
                $codigos = $_POST['codigo'];
                $nomes = $_POST['nome'];
                $precos = $_POST['preco'];

                for ($i = 0; $i < 5; $i++) { // Preencher o mapa
                    $codigo = trim($codigos[$i]);
                    $nome = trim($nomes[$i]);
                    $preco = floatval($precos[$i]);

                    if ($preco > 100) { // Aplica desc. de 10% if > R$100
                        $preco *= 0.9;
                    }

                    $produtos[$codigo] = [
                        'nome' => $nome,
                        'preco' => $preco
                    ];
                }

                usort($produtos, function($a, $b) { // Ordena pelo nome
                    return strcmp($a['nome'], $b['nome']);
                });

                echo "<div class='card mt-4 p-3'>"; // Exibe a lista dos produtos ordenados pelo nome
                echo "<h3 class='text-center'>Lista de Produtos</h3>";
                echo "<ul class='list-group'>";
                foreach ($produtos as $codigo => $produto) {
                    echo "<li class='list-group-item'>
                            <strong>{$produto['nome']}</strong> - R$ " . number_format($produto['preco'], 2, ',', '.') . " (Código: $codigo)
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
