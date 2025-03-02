<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Resultado do Cálculo do Perímetro do Retângulo</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $largura = isset($_POST["largura"]) ? floatval($_POST["largura"]) : 0;
            $altura = isset($_POST["altura"]) ? floatval($_POST["altura"]) : 0;

            // Calcular o perímetro do retângulo (2 * (largura + altura))
            $perimetro = 2 * ($largura + $altura);
            
            echo "<p>O perímetro do retângulo com largura $largura e altura $altura é: <strong>$perimetro</strong> unidades.</p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
