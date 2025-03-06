<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4: Desconto no Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Exercício 4: Desconto no Produto</h1>
        <form method="post" action="ex04resp.php">
            <div class="mb-3">
                <label for="valorProduto" class="form-label">Valor do Produto (R$):</label>
                <input type="number" id="valorProduto" name="valorProduto" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Desconto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
