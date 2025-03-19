<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1: Lista de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Exercício 1: Lista de Contatos</h2>
        <form action="" method="POST">
            <?php for($i = 0; $i < 5; $i++): ?> 
                <div class="mb-3">
                    <input type="text" class="form-control" name="nome[]" placeholder="Nome" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="tel[]" placeholder="Telefone" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $contatos = [];
                $nomes = $_POST['nome'];
                $tels = $_POST['tel'];
                
                for ($i = 0; $i < count($nomes); $i++) {
                    $nome = trim($nomes[$i]);
                    $tel = trim($tels[$i]);
                    
                    if (empty($nome) || empty($tel)) continue;
                    if (isset($contatos[$nome]) || in_array($tel, $contatos)) {
                        echo "<div class='alert alert-danger mt-3'>Erro: Contato duplicado! $nome - $tel</div>";
                        continue;
                    }
                    $contatos[$nome] = $tel;
                }
                
                ksort($contatos);
                
                if (!empty($contatos)) {
                    echo "<div class='card mt-4 p-3'><h3 class='text-center'>Lista de Contatos</h3><ul class='list-group'>";
                    foreach ($contatos as $nome => $tel) {
                        echo "<li class='list-group-item'><strong>$nome</strong>: $tel</li>";
                    }
                    echo "</ul></div>";
                }
            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
            }
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
