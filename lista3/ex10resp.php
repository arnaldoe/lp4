<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Resultado: Tabuada</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Obtém o número informado
            $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

            echo "<h3>Tabuada do $numero</h3>";
            echo "<ul class='list-group'>"; // Lista não ordenada (ul) com classe list-group do Bootstrap (estilização)
            
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li class='list-group-item'>$numero x $i = $resultado</li>";
            }

            echo "</ul>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
