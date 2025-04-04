<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary mb-3">Validação de Data</h2>
            <form method="post" action="ex04resp.php">
                <div class="mb-3">
                    <label for="dia" class="form-label fw-bold">Dia:</label>
                    <input type="number" id="dia" name="dia" class="form-control border-primary" min="1" max="31" required>
                </div>
                <div class="mb-3">
                    <label for="mes" class="form-label fw-bold">Mês:</label>
                    <input type="number" id="mes" name="mes" class="form-control border-primary" min="1" max="12" required>
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label fw-bold">Ano:</label>
                    <input type="number" id="ano" name="ano" class="form-control border-primary" min="1" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Verificar Data</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
