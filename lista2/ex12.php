<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12: Potência</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 12: Cálculo de Potência</h1>
        <form method="post" action="ex12resp.php">

            <div class="mb-3">
                <label for="base" class="form-label">Base</label>
                <input type="number" id="base" name="base" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="expoente" class="form-label">Expoente</label>
                <input type="number" id="expoente" name="expoente" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Potência</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
