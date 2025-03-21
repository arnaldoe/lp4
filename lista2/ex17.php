<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17: Calcular Juros Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 17: Calcular Juros Simples</h1>
        <form method="post" action="ex17resp.php">

            <div class="mb-3">
                <label for="capital" class="form-label">Capital (R$)</label>
                <input type="number" step="0.01" id="capital" name="capital" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="taxa" class="form-label">Taxa de Juros (%)</label>
                <input type="number" step="0.01" id="taxa" name="taxa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">Período (em anos)</label>
                <input type="number" step="0.01" id="periodo" name="periodo" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Juros Simples</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
