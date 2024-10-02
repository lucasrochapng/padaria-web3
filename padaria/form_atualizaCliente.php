<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();
$cliente = new Cliente($conexao);

$cliente->setId($_GET['id']);
$stmt = $cliente->consultar();
$clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC); // apenas para uma linha
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Atualizar Cliente</h3>
        <form method="POST" action="atualizaCliente.php">
            <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($clienteSelecionado['nome']); ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo htmlspecialchars($clienteSelecionado['telefone']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($clienteSelecionado['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars($clienteSelecionado['cpf']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
