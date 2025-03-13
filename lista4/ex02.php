<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2: Converter Texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center">Conversor de Texto</h2>
            <form method="post" action="ex02resp.php">
                <div class="mb-3">
                    <label for="palavra" class="form-label">Digite uma palavra:</label>
                    <input type="text" id="palavra" name="palavra" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Converter</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
