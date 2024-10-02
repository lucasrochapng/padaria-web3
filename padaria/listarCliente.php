<?php
require 'Banco.php';
require 'Cliente.php';

$banco = new Banco();
$db = $banco->getConexao();

$cliente = new Cliente($db);
$stmt = $cliente->read();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">PADARIA JUJUTSU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="form_cadastroCliente.php">Cadastrar Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listarcliente.php">Lista de Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Clientes</h2>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['nome']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                        <td><?php echo htmlspecialchars($cliente['cpf']); ?></td>
                        <td>
                            <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="deleteCliente.php?id=<?php echo $cliente['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
