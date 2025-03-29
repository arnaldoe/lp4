<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow-lg p-4 bg-light">
        <h2 class="text-center text-primary">Lista de Contatos</h2>
        <form action="" method="POST" class="mt-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nome[]" placeholder="Nome" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name="tel[]" placeholder="Telefone" pattern="[0-9]{8,15}" required>
                    </div>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
        <?php
            try {
                $contatos = [];
                $nomes = $_POST['nome'] ?? [];
                $tels = $_POST['tel'] ?? [];
                $erros = [];

                for ($i = 0; $i < count($nomes); $i++) {
                    $nome = trim($nomes[$i]);
                    $tel = trim($tels[$i]);
                    
                    if (empty($nome) || empty($tel)) continue;
                    if (isset($contatos[$nome]) || in_array($tel, $contatos)) {
                        $erros[] = "Contato duplicado: $nome - $tel";
                        continue;
                    }
                    $contatos[$nome] = $tel;
                }

                ksort($contatos);
            } catch (Exception $e) {
                $erros[] = "Erro: " . $e->getMessage();
            }
        ?>

        <?php if (!empty($erros)): ?>
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    <?php foreach ($erros as $erro): ?>
                        <li><?= htmlspecialchars($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($contatos)): ?>
            <div class="card mt-4 shadow-lg p-3">
                <h3 class="text-center text-primary">Lista de Contatos</h3>
                <ul class="list-group">
                    <?php foreach ($contatos as $nome => $tel): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong><?= htmlspecialchars($nome) ?></strong>
                            <span class="badge bg-primary"><?= htmlspecialchars($tel) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
