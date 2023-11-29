<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PiraNews - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="imagex/png" href="./Assets/logo_piranews.png">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="./contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="./login.php">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="logo">
                <a href="index.php" class="navbar-brand p-0 d-none d-lg-block">
                    <img src="./Assets/logo_piranews2.png" alt="NewsPira">
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <img src="./Assets/logo_piranews3.png" alt="NewsPira">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="noticias.php" class="nav-item nav-link">Noticias</a>
                    <a href="Classificados.php" class="nav-item nav-link">Classificados</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Faça login para publicar no NewsPira!</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <h6 class="text-uppercase font-weight-bold mb-3">Login</h6>
                        <form action="processamento_login.php" method="POST"> 
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" placeholder="Email" required="required"  name="email" id="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control p-4" placeholder="Senha" required="required"  name="senha" id="senha"/>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Entre em cantato</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Piracicaba</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>019 99999-9999</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>contato@newspira.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Nos siga</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Ultimas noticias</h5>
                <?php
                        require_once 'conecta.php'; 
                        $consulta = "SELECT titulo, DATACADASTRO FROM news WHERE stat = 1  ORDER BY DATACADASTRO DESC LIMIT 3";
                        $con = $mysqli->query($consulta) or die ($mysqli->error);
                        while($dado = $con->fetch_array()){ 
                            echo '<div class="mb-3">';
                            echo '<div class="mb-2">';
                            echo '<a class="badge badge-danger text-uppercase font-weight-semi-bold p-2 mr-2" href="./noticias.php">Noticias</a>';
                            echo '<a class="text-white" href="">'.$dado['DATACADASTRO'].'</a>';
                            echo '</div>';
                            echo '<a class="small text-body text-uppercase font-weight-medium" href="./noticias.php">'.$dado['titulo'].'</a>';
                            echo '</div>';
                    } ?>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categorias</h5>
                <div class="m-n1">
                    <a href="./index.php" class="btn btn-sm btn-secondary m-1">Home</a>
                    <a href="./noticias.php" class="btn btn-sm btn-secondary m-1">Noticias</a>
                    <a href="./classificados.php" class="btn btn-sm btn-secondary m-1">Classificados</a>
                    <a href="./index.php" class="btn btn-sm btn-secondary m-1">Filmes</a>
                    <a href="./login.php" class="btn btn-sm btn-secondary m-1">Login</a>
                    <a href="./registrar.php" class="btn btn-sm btn-secondary m-1">Registrar</a>
                    <a href="./contato.php" class="btn btn-sm btn-secondary m-1">Contato</a>
                    <a href="./painel.php" class="btn btn-sm btn-secondary m-1">Painel</a>
                    <a href="./admin.php" class="btn btn-sm btn-secondary m-1">Admin</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Sobre nós</h5>
                <p>O objetivo principal do site "PiraNews" é fornecer aos seus leitores informações atualizadas, confiáveis e relevantes sobre os acontecimentos locais, buscamos ser a principal fonte de notícias para a comunidade, abrangendo uma variedade de tópicos, incluindo política, economia, cultura, esportes, ciência e tecnologia, entre outros.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#index.php">NewsPira</a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		<!-- Design by <a href="https://htmlcodex.com">HTML Codex</a><br>
        Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
    </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dangerbadge-danger btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>