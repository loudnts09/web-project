<?php require_once "../model/validar_acessos.php"; ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../style.css">
    <title>Pizzaria do Cuca - Fazer Pedido</title>
    <link rel="icon" href="../imagens/fatia.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>

  <body>
    <!-- Cabeçalho -->
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
            <ul class="navbar-nav navbar-dark">
              <li><a href="home.php" class="nav-link link-secondary text-white">Home</a></li>
              <li><a href="#" class="nav-link link-secondary text-white">Sobre nós</a></li>
              <li><a href="perfil.php" class="nav-link link-secondary text-white">Perfil</a></li>
              <li><a href="../model/logoff.php" class="nav-link link-secondary text-white">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Formulário de Pedido -->
    <main class="d-flex justify-content-center align-items-center vh-100">
      <article class="container">
        <section class="d-flex justify-content-center">
          <div class="p-4 bg-dark form-container">
            <h3 class="text-white mb-4">Faça seu Pedido</h3>
            <form method="post" action="registrar_pedido.php">
              <div class="form-floating my-1">
                <input name="nome_pizza" type="text" class="form-control" id="nome_pizza" placeholder="Digite o nome da pizza">
                <label for="nome_pizza">Nome da Pizza</label>
              </div>
              <div class="form-floating my-1">
                <select name="tamanho" class="form-select" id="tamanho">
                  <option>Pequena</option>
                  <option>Média</option>
                  <option>Grande</option>
                  <option>Família</option>
                </select>
                <label for="tamanho">Tamanho</label>
              </div>
              <div class="form-floating my-1">
                <textarea name="ingredientes" class="form-control" id="ingredientes" placeholder="Ingredientes adicionais" style="height: 100px;"></textarea>
                <label for="ingredientes">Ingredientes Adicionais</label>
              </div>
              <div class="row mt-4">
                <div class="col-6">
                  <a class="btn btn-warning w-100 py-2" href="home.php">Voltar</a>
                </div>
                <div class="col-6">
                  <button class="btn btn-primary w-100 py-2" type="submit">Enviar Pedido</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </article>
    </main>

    <!-- Rodapé -->
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

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
