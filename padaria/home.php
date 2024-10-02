<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Minha Padaria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero img {
            width: 100%;
            height: auto;
        }
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Sombra com transparência */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 2rem; /* Tamanho do texto */
            padding: 20px; /* Espaçamento interno */
        }
        .hero .titulo {
            display: flex; /* Usar flexbox para alinhar os títulos */
            justify-content: center; /* Centralizar horizontalmente */
            font-size: 3rem; /* Tamanho do título */
        }
        .hero .titulo1 {
            color: white; /* Cor do título 1 */
            margin-right: 10px; /* Espaço entre os títulos */
        }
        .hero .titulo2 {
            color: blue; /* Cor do título 2 */
        }
        .hero .slogan {
            color: white; /* Cor do slogan */
            font-size: 1.5rem; /* Tamanho do slogan */
            margin-top: -15px;
        }
    </style>
    </style>
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

     <!-- Imagem com Sombra e Texto -->
     <div class="hero">
        <img src="banner.jpg" alt="Descrição da Imagem">
        <div class="overlay">
            <div class="titulo">
                <span class="titulo1">PADARIA</span>
                <span class="titulo2">JUJUTSU</span>
            </div>
            <p class="slogan">SEU SABOR, NOSSA PAIXÃO!</p>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Bem-vindo à Padaria Jujutsu!</h1>
        <p>Em nossa padaria, oferecemos os melhores produtos frescos para você e sua família. 
        Venha experimentar nossas deliciosas pães, bolos e muito mais!</p>
        
        <!-- Cards -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="pao-artesanal.webp" class="card-img-top" alt="Pão Artesanal">
                    <div class="card-body">
                        <h5 class="card-title">Pão Artesanal</h5>
                        <p class="card-text">Feito com ingredientes frescos e naturais, perfeito para seu café da manhã.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="bolo-chocolate.jpg" class="card-img-top" alt="Bolo de Chocolate">
                    <div class="card-body">
                        <h5 class="card-title">Bolo de Chocolate</h5>
                        <p class="card-text">Um bolo rico e cremoso que derrete na boca, ideal para todas as ocasiões.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="doces.jpg" class="card-img-top" alt="Doces Caseiros">
                    <div class="card-body">
                        <h5 class="card-title">Doces Caseiros</h5>
                        <p class="card-text">Nossos doces são feitos com carinho, trazendo o sabor da infância de volta.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <p>Estamos localizados na Rua Exemplo, 123, e adoramos receber nossos clientes. 
        Visite-nos e descubra o sabor da qualidade!</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
