<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8: Cálculo da Área do Retângulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 8: Cálculo da Área do Retângulo</h1>
        <form method="post" action="ex08resp.php">

            <div class="mb-3">
                <label for="largura" class="form-label">Largura do Retângulo</label>
                <input type="number" id="largura" name="largura" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Altura do Retângulo</label>
                <input type="number" id="altura" name="altura" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Área</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
