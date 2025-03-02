<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado do Cálculo do Perímetro do Círculo</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $raio = isset($_POST["raio"]) ? floatval($_POST["raio"]) : 0;

            // Calcular o perímetro do círculo (2 * π * raio)
            $pi = pi();
            $perimetro = 2 * $pi * $raio;
            
            echo "<p>O perímetro do círculo com raio $raio é: <strong>" . number_format($perimetro, 2) . "</strong> unidades.</p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
