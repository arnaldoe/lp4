<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4: Cadastro de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Exercício 4: Cadastro de Itens</h2>
        <form action="" method="POST">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nome[]" placeholder="Nome do Item" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="preco[]" placeholder="Preço do Item" step="0.01" min="0" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $itens = [];
                $nomes = $_POST['nome'];
                $precos = $_POST['preco'];

                for ($i = 0; $i < 5; $i++) { // Preencher o mapa com os itens e aplicar o imposto de 15%
                    $nome = trim($nomes[$i]);
                    $preco = floatval($precos[$i]);

                    $preco_com_imposto = $preco * 1.15; // Aplica o imposto de 15%

                    $itens[$nome] = $preco_com_imposto;
                }

                asort($itens); // Ordena os itens pelo preço (do menor para o maior)

                echo "<div class='card mt-4 p-3'>"; // Exibe lista ordenados pelos preços com o imposto
                echo "<h3 class='text-center'>Lista de Itens com Imposto de 15%</h3>";
                echo "<ul class='list-group'>";
                foreach ($itens as $nome => $preco_com_imposto) {
                    echo "<li class='list-group-item'>
                            <strong>$nome</strong> - R$ " . number_format($preco_com_imposto, 2, ',', '.') . "
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
