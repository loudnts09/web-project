<?php require "../model/validar_acessos.php"; ?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Pizzaria do Cuca - Perfil</title>
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
              <li><a href="home.php" class="nav-link link-secondary text-white">Home</a></li>
              <li><a href="../model/logoff.php" class="nav-link link-secondary text-white">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="d-flex justify-content-center align-items-center vh-100">
        <article class="container">
            <section class="d-flex justify-content-center">
                <div class="p-5 bg-dark text-white rounded" style="max-width: 500px; width: 100%;">
                    <h3 class="mb-4 text-center">Perfil do Usuário</h3>
                    <form action="../model/atualizar_usuario.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 text-center">
                            <img src="#" alt="Foto do usuário" class="rounded-circle mb-3" width="120" height="120">
                            <input type="file" name="foto" class="form-control-file mt-2">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome">
                        </div>

                        <div class="form-group mb-3">
                            <label for="numero" class="form-label">Número de Telefone</label>
                            <input type="tel" id="numero" name="numero" class="form-control" placeholder="(XX) XXXXX-XXXX">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="seu-email@exemplo.com">
                        </div>

                        <div class="form-group mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="Sua senha">
                        </div>

                        <div class="form-group mb-3">
                            <label for="tipo_perfil" class="form-label">Tipo de Perfil</label>
                            <select id="tipo_perfil" name="tipo_perfil" class="form-control">
                                <option value="usuario">Usuário</option>
                                <option value="administrador">Administrador</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-warning w-100">Atualizar</button>
                            </div>
                            <div class="col-6">
                                <a href="../model/deletar_usuario.php" class="btn btn-danger w-100" onclick="return confirm('Tem certeza que deseja excluir seu perfil?')">Excluir</a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </article>
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="mb-2">Pizzaria do Cuca © 2024</p>
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
