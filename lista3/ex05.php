<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5: Nome do Mês</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Exercício 5: Nome do Mês</h1>
        <form method="post" action="ex05resp.php">
            <div class="mb-3">
                <label for="numeroMes" class="form-label">Digite um número (1 a 12):</label>
                <input type="number" id="numeroMes" name="numeroMes" class="form-control" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Exibir Mês</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
