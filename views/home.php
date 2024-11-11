<?php require "../controller/validar_acessos.php"; ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Pizzaria do Cuca - Home</title>
    <link rel="icon" href="../imagens/fatia.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>

  <body>
    <header class="m-5">
      <nav class="navbar navbar-expand-md bg-dark fixed-top">
        <div class="container">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="../imagens/fatia.png" id="logo" class="navbar-brand" alt="logo pizza">
            </a>
            <h3 class="text-white">Peça já a sua pizza</h3>
          </div>
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navegacao">
            <ul class="navbar-nav">
              <li><a href="#" class="nav-link link-secondary text-white">Sobre nós</a></li>
              <li><a href="perfil.php" class="nav-link link-secondary text-white">Perfil</a></li>
              <li><a href="../controller/logoff.php" class="nav-link link-secondary text-white">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <main class="d-flex justify-content-center align-items-center vh-100">
      <article class="container">
        <section class="d-flex justify-content-center">
          <div class="p-5 bg-dark text-white rounded">
            <h3 class="mb-4">Bem-vindo à Pizzaria do Cuca!</h3>
            <p>Peça sua pizza favorita ou acompanhe seu pedido.</p>
            <div class="row mt-4">
              <div class="col-md-6 mb-3">
                <a href="fazer_pedido.php" class="btn btn-primary w-100">Fazer pedido</a>
              </div>
              <div class="col-md-6">
                <a href="meus_pedidos.php" class="btn btn-warning w-100">Meus Pedidos</a>
              </div>
            </div>
          </div>
        </section>
      </article>
    </main>

    <footer class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p class="mb-2">Pizzaria do Cuca © 2024</p>
            <a href="#" class="text-white me-3">Política de Privacidade</a>
            <a href="#" class="text-white me-3">Termos de Uso</a>
          </div>
          <div class="col-6 text-end">
            <a href="#" class="text-white me-3 fs-4"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="text-white me-3 fs-4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white fs-4"><i class="bi bi-twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
