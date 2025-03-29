<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow-lg p-4">
        <h2 class="text-center">Cadastro de Produtos</h2>
        <form action="" method="POST" class="row g-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="codigo[]" placeholder="Código do Produto" required>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nome[]" placeholder="Nome do Produto" required>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="preco[]" placeholder="Preço (R$)" step="0.01" min="0" required>
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
                $produtos = processarProdutos($_POST['codigo'] ?? [], $_POST['nome'] ?? [], $_POST['preco'] ?? []);

                if (!empty($produtos['erros'])) {
                    echo "<div class='alert alert-danger mt-3'>";
                    foreach ($produtos['erros'] as $erro) {
                        echo "<p>$erro</p>";
                    }
                    echo "</div>";
                } else {
                    exibirTabelaProdutos($produtos['lista']);
                }

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }

        function processarProdutos(array $codigos, array $nomes, array $precos): array {
            $produtos = [];
            $erros = [];

            for ($i = 0, $n = count($codigos); $i < $n; $i++) {
                $codigo = trim(htmlspecialchars((string) ($codigos[$i] ?? '')));
                $nome = trim(htmlspecialchars((string) ($nomes[$i] ?? '')));
                $precoOriginal = floatval($precos[$i] ?? 0);

                if (empty($codigo) || empty($nome)) {
                    $erros[] = "O código ou nome do produto na posição " . ($i + 1) . " está vazio.";
                    continue;
                }

                if (isset($produtos[$codigo])) {
                    $erros[] = "O código '$codigo' já foi cadastrado.";
                    continue;
                }

                $precoFinal = $precoOriginal > 100 ? $precoOriginal * 0.9 : $precoOriginal;

                $produtos[$codigo] = [
                    'nome' => $nome,
                    'preco_original' => $precoOriginal,
                    'preco_final' => $precoFinal
                ];
            }

            usort($produtos, fn($a, $b) => strcmp($a['nome'], $b['nome']));

            return ['lista' => $produtos, 'erros' => $erros];
        }

        function exibirTabelaProdutos(array $produtos): void {
            echo "<div class='card mt-4 p-3 shadow-lg'>";
            echo "<h3 class='text-center mb-3'>Lista de Produtos</h3>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='table-dark'><tr><th>Código</th><th>Nome</th><th>Preço</th><th>Final (com desconto)</th></tr></thead><tbody>";

            foreach ($produtos as $codigo => $produto) {
                echo "<tr>
                        <td><strong>$codigo</strong></td>
                        <td>{$produto['nome']}</td>
                        <td>R$ " . number_format($produto['preco_original'], 2, ',', '.') . "</td>
                        <td>R$ " . number_format($produto['preco_final'], 2, ',', '.') . "</td>
                      </tr>";
            }

            echo "</tbody></table></div>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
