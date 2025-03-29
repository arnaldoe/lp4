<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card shadow-lg p-4">
        <h2 class="text-center">Cadastro de Itens</h2>
        <form action="" method="POST" class="row g-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome[]" placeholder="Nome do Item" required>
                </div>
                <div class="col-md-6">
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
                $resultado = processarItens($_POST['nome'] ?? [], $_POST['preco'] ?? []);

                if (!empty($resultado['erros'])) {
                    echo "<div class='alert alert-danger mt-3'>";
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p>$erro</p>";
                    }
                    echo "</div>";
                } else {
                    exibirTabelaItens($resultado['lista']);
                }

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }

        function processarItens(array $nomes, array $precos): array {
            $itens = [];
            $erros = [];

            for ($i = 0, $n = count($nomes); $i < $n; $i++) {
                $nome = trim(htmlspecialchars((string) ($nomes[$i] ?? '')));
                $precoOriginal = floatval($precos[$i] ?? 0);

                if (empty($nome)) {
                    $erros[] = "O nome do item na posição " . ($i + 1) . " está vazio.";
                    continue;
                }

                if (isset($itens[$nome])) {
                    $erros[] = "O item '$nome' já foi cadastrado.";
                    continue;
                }

                $precoComImposto = $precoOriginal * 1.15; // Aplica imposto de 15%

                $itens[$nome] = [
                    'preco_original' => $precoOriginal,
                    'preco_com_imposto' => $precoComImposto
                ];
            }

            uasort($itens, fn($a, $b) => $a['preco_com_imposto'] <=> $b['preco_com_imposto']);

            return ['lista' => $itens, 'erros' => $erros];
        }

        function exibirTabelaItens(array $itens): void {
            echo "<div class='card mt-4 p-3 shadow-lg'>";
            echo "<h3 class='text-center mb-3'>Lista de Itens com Imposto de 15%</h3>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='table-dark'><tr><th>Nome</th><th>Preço Original</th><th>Com Imposto</th></tr></thead><tbody>";

            foreach ($itens as $nome => $item) {
                echo "<tr>
                        <td><strong>$nome</strong></td>
                        <td>R$ " . number_format($item['preco_original'], 2, ',', '.') . "</td>
                        <td>R$ " . number_format($item['preco_com_imposto'], 2, ',', '.') . "</td>
                      </tr>";
            }

            echo "</tbody></table></div>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
