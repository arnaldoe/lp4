<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3: Verificar Substring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Verificador de Substring</h2>
            <form method="post" action="ex03resp.php">
                <div class="mb-3">
                    <label for="palavra1" class="form-label">Digite a primeira palavra:</label>
                    <input type="text" id="palavra1" name="palavra1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="palavra2" class="form-label">Digite a segunda palavra:</label>
                    <input type="text" id="palavra2" name="palavra2" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Verificar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
