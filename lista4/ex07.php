<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre Datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center text-primary mb-3">Diferença entre Datas</h2>
            <form method="post" action="ex07resp.php">
                <div class="mb-3">
                    <label for="data1" class="form-label fw-bold">Data Inicial:</label>
                    <input type="date" id="data1" name="data1" class="form-control border-primary" required>
                </div>
                <div class="mb-3">
                    <label for="data2" class="form-label fw-bold">Data Final:</label>
                    <input type="date" id="data2" name="data2" class="form-control border-primary" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calcular Diferença</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>