<?php require "validar_acessos.php"; ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <title>Pizzaria do Cuca - Consultar Pedidos</title>
    <link rel="icon" href="imagens/fatia.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
      .card-consultar-pedido {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      .btn-voltar {
        width: 100%;
      }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="m-5">
        <nav class="navbar navbar-expand-md bg-dark fixed-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <!-- Logo -->
                    <a href="#">
                        <img src="imagens/fatia.png" id="logo" class="navbar-brand" alt="logo pizza">
                    </a>
                    <h3 class="text-white">Consulta de Pedidos</h3>
                </div>

                <!-- Botão Navbar -->
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links Navbar -->
                <div class="collapse navbar-collapse justify-content-end" id="navegacao">
                    <ul class="navbar-nav">
                        <li>
                            <a href="home.php" class="nav-link link-secondary text-white">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-secondary text-white">Sobre nós</a>
                        </li>
                        <li>
                            <a href="perfil.php" class="nav-link link-secondary text-white">Perfil</a>
                        </li>
                        <li>
                            <a href="logoff.php" class="nav-link link-secondary text-white">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Container principal -->
    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="container">
            <div class="row">
                <div class="card-consultar-pedido">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            Pedidos Realizados
                        </div>

                        <div class="card-body">
                            <!-- Exemplo de pedido -->
                            <div class="card mb-3 bg-light text-dark">
                                <div class="card-body">
                                    <h5 class="card-title">Pedido #1234</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Margarita - Tamanho Grande</h6>
                                    <p class="card-text">Endereço de entrega: Rua dos Exemplos, 123</p>
                                    <p class="card-text">Status: <span class="text-success">Em preparo</span></p>
                                </div>
                            </div>

                            <!-- Outro pedido -->
                            <div class="card mb-3 bg-light text-dark">
                                <div class="card-body">
                                    <h5 class="card-title">Pedido #5678</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Pepperoni - Tamanho Médio</h6>
                                    <p class="card-text">Endereço de entrega: Rua das Pizzas, 456</p>
                                    <p class="card-text">Status: <span class="text-danger">Entregue</span></p>
                                </div>
                            </div>

                            <!-- Botão voltar -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <a href="home.php" class="btn btn-lg btn-warning btn-voltar">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark" id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-6 align-self-center">
                    <p class="text-white mb-2">Pizzaria do Cuca © 2024</p>
                    <a href="#" class="text-white me-3" id="link-rodape">Política de Privacidade</a>
                    <a href="#" class="text-white me-3" id="link-rodape">Termos de Uso</a>
                </div>
                <div class="col-6 align-self-center text-end">
                    <a href="#" class="text-white me-3 fs-4"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="text-white me-3 fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>