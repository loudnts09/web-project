<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">
        <title>Pizzaria do Cuca - Home</title>
        <link rel="icon" href="imagens/fatia.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body>
        <header class="m-5">
            <nav class="navbar navbar-expand-md bg-dark fixed-top">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <!--Logo-->
                        <a href="#">
                            <img src="imagens/fatia.png" id="logo" class="navbar-brand"alt="logo pizza">
                        </a>
                        <h3 class="text-white">Pizzaria do Cuca</h3>
                    </div>

                    <!--Botão-->
                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--Link-->
                    <div class="collapse navbar-collapse justify-content-end" id="navegacao">
                        <ul class="navbar-nav navbar-dark">
                            <li>
                                <a href="views/cadastro.php" class="nav-link link-secondary text-white">Cadastre-se</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-secondary text-white">Sobre nós</a>
                            </li>
                        </ul>
                    </div>    
                </div>
            </nav>
        </header>
        
        <main class="d-flex justify-content-center align-items-center vh-100">
            <article class="container">
                <section class="d-flex justify-content-center">
                    <div class="p-5 bg-dark form-container">
                        <h3 class="text-white mb-4">Registre-se</h3>
                        <form action="model/validar_login.php" method="post">
                            <div class="form-floating my-1">
                                <input name="email" type="email" class="form-control" id="email_input" placeholder="seu-email@gmail.com">
                                <label for="email_input">E-mail</label>
                            </div>
                            <div class="form-floating">
                                <input name="senha" type="password" class="form-control" id="password_input" placeholder="sua_senha">
                                <label for="password_input">Senha</label>
                            </div>
                            <?php
                                if (isset($_GET["login"]) && $_GET["login"] == "erro") { ?>
                                
                                    <div class="text-danger">
                                    Usuário ou senha inválido(s)!
                                    </div>

                            <?php } ?>
                            <div class="form-check text-start my-2">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label text-white" for="check">Lembrar-me</label>
                            </div>
                            <button class="btn btn-primary w-100 py-2">Entrar</button>
                        </form>
                    </div>
                </section>
            </article>
        </main>

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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
