<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21: Menor Valor e Posição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 21: Menor Valor e Posição</h1>
        <form method="post" action="ex01resp.php">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <div class="mb-3">
                    <label for="num<?php echo $i; ?>" class="form-label">Número <?php echo $i; ?>:</label>
                    <input type="number" id="num<?php echo $i; ?>" name="num<?php echo $i; ?>" class="form-control" required>
                </div>
            <?php endfor; ?>

            <button type="submit" class="btn btn-primary">Verificar Menor Valor</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
