<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6: Arredondamento de Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Arredondamento de Número</h2>
            <form method="post" action="ex06resp.php">
                <div class="mb-3">
                    <label for="numero" class="form-label">Digite um número decimal:</label>
                    <input type="number" id="numero" name="numero" class="form-control" step="any" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Arredondar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
