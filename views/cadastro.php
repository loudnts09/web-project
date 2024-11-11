<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Pizzaria do Cuca - Cadastro de Usuário</title>
    <link rel="icon" href="../imagens/fatia.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      main {
        padding-top: 100px;
        padding-bottom: 100px;
      }
    </style>
  </head>

  <body>
    <header class="m-5">
      <nav class="navbar navbar-expand-md bg-dark fixed-top">
        <div class="container">
          <div class="d-flex align-items-center">
            <a href="home.php">
              <img src="../imagens/fatia.png" id="logo" class="navbar-brand" alt="logo pizza">
            </a>
            <h3 class="text-white">Peça já a sua pizza</h3>
          </div>
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navegacao">
            <a href="../index.php" class="nav-link link-secondary text-white">Login</a>
          </div>
        </div>
      </nav>
    </header>

    <main class="d-flex justify-content-center align-items-center">
      <article class="container">
        <section class="d-flex justify-content-center">
          <div class="p-5 bg-dark text-white rounded">
            <h3 class="mb-4">Cadastro de Novo Usuário</h3>
            <form action="../controller/cadastrar_usuario.php" method="POST" enctype="multipart/form-data">
              <!-- Foto do Usuário -->
              <div class="form-group mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto" accept="image/*">
              </div>

              <!-- Nome do Usuário -->
              <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" required>
              </div>

              <!-- Número de Contato -->
              <div class="form-group mb-3">
                <label for="numero" class="form-label">Número de Contato</label>
                <input type="text" name="numero" class="form-control" id="numero" placeholder="Digite seu número" required>
              </div>

              <!-- Email -->
              <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="seu-email@gmail.com" required>
              </div>

              <!-- Senha -->
              <div class="form-group mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha" required>
              </div>

              <!-- Tipo de Perfil -->
              <div class="form-group mb-3">
                <label for="perfil" class="form-label">Tipo de Perfil</label>
                <select name="perfil" class="form-control" id="perfil" required>
                  <option value="usuario">Usuário</option>
                  <option value="administrador">Administrador</option>
                </select>
              </div>
              <?php if (isset($_GET["cadastro"]) && $_GET["cadastro"] == "feito"){ ?>
                  <div class="alert alert-success mt-4" role="alert">
                      Cadastro realizado com sucesso!
                  </div>
              <?php } else if(isset($_GET["cadastro"]) &&$_GET["cadastro"] == "erro"){ ?>
                  <div class="alert alert-danger mt-4" role="alert">
                      Falha ao realizar cadastro.
                  </div>
              <?php }?>

              <!-- Botões de Ação -->
              <div class="row mt-4">
                <div class="col-6">
                  <a href="../index.php" class="btn btn-warning w-100">Voltar</a>
                </div>
                <div class="col-6">
                  <button type="submit" class="btn btn-success w-100">Cadastrar</button>
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
