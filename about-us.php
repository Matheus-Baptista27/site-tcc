<?php

    include 'conn.php';

    // Realiza a consulta dos locais
    $sql="select * from locais";
    $result_de = mysqli_query($conn, $sql);

    // Reexecuta a consulta para ser usada no campo "Para"
    $result_para = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-BR"> 
  <head>
    <!-- Site Titulo-->
    <title>Sobre Nós</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
    <div class="page-loader"> 
      <div class="page-loader-body"> 
        <div class="preloader-wrapper big active"> 
          <div class="spinner-layer spinner-blue"> 
            <div class="circle-clipper left">
              <div class="circle"> </div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-yellow"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-green"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <!-- Page Header-->  
  <header class="section page-header">
  <!-- RD Navbar -->
  <div class="rd-navbar-wrap rd-navbar-corporate">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#77a0d8; position: relative; transition: top 0.3s;">
      <div class="container">
        <!-- Marca/Logo -->
        <a class="navbar-brand" href="index.php">
          <img src="images/logo-voe.png" alt="Logo Voe">
        </a>

        <!-- Botão de Colapso -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" 
                style="color: white; border: 1px solid white;">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>

        <!-- Links de Navegação -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
              <a class="nav-link nav-link-hover" href="index.php">Início</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : ''; ?>">
              <a class="nav-link nav-link-hover" href="about-us.php">Sobre Nós</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : ''; ?>">
              <a class="nav-link nav-link-hover" href="contacts.php">Contato</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'reviews.php' ? 'active' : ''; ?>">
              <a class="nav-link nav-link-hover" href="reviews.php">Avaliações</a>
            </li>
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
              <a class="nav-link nav-link-hover" href="register.php">Cadastre sua Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-hover" href="#">Sair</a>
            </li>
          </ul>
          <!-- Botão Reserve seu Destino -->
          <a class="btn btn-lg" href="index.php"
             style="background-color: #77a0d8; color: white; border: 2px solid #fff; margin-left: 10px; padding: 10px 20px; text-transform: uppercase; font-weight: bold;"
             onmouseover="this.style.backgroundColor='#a0c4e1';"
             onmouseout="this.style.backgroundColor='#77a0d8';">
            Reserve seu destino
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>



      <!-- Olá, Somos o VOE -->
      <section class="section section-lg bg-default">
        <div class="container container-bigger">
          <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>Olá, Somos o VOE</h3>
              <div class="divider divider-decorate"></div>
              <p class="heading-5">Bem-vindo ao VOE - Viva o Explorar, o seu novo aliado na busca por experiências inesquecíveis! 
                Se você é apaixonado por viajar, mas se sente perdido ao escolher o próximo destino para suas férias ou folgas, 
                este é o lugar certo para você. </p>

              <p class="text-spacing-sm">Nosso site foi criado com o objetivo de ajudar pessoas como você a descobrir lugares incríveis, adaptados às suas preferências pessoais.</p>
              <a class="btn btn-lg"
                  href="#"
                  style="background-color: #77a0d8; color: white; border: 2px solid #77a0d8;"
                  onmouseover="this.style.backgroundColor='#a0c4e1';"
                  onmouseout="this.style.backgroundColor='#77a0d8';">
                  SABER MAIS
                </a>
            </div>
            <div class="col-md-10 col-lg-6"><img src="images/voe-foto.png" alt="" width="720" height="459"/>
            </div>
          </div>
        </div>
      </section>

      <!-- RECURSOS QUE O SITE OFERECE-->
      <section class="section section-lg section-lg-alternative bg-gray-lighter novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-50 justify-content-sm-center text-gray-light">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-alarm"></div>
                  <h6 class="box-minimal-title">Sugestões de Destinos</h6>
                </div>
                <p>Com base nas suas preferências, o VOE vai sugerir os melhores destinos para você explorar, seja para uma escapada de fim de semana ou uma viagem de férias mais longa.Proporcionando experiências alinhadas com seus interesses.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-calendar-check"></div>
                  <h6 class="box-minimal-title">Planejamento</h6>
                </div>
                <p>O usuário poderá visualizar o itinerário planejado com os detalhes da viagem, incluindo as atrações locais, restaurantes e atividades disponíveis, garantindo uma experiência organizada e tranquila.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-star"></div>
                  <h6 class="box-minimal-title">Recomendações</h6>
                </div>
                <p>Além de sugestões de locais, o site fornecerá avaliações de outros viajantes e recomendações nas experiências que tiveram. Assim, você terá uma visão completa sobre o que esperar de cada destino.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-account"></div>
                  <h6 class="box-minimal-title">Parceiros</h6>
                </div>
                <p>Vamos reunir as melhores promoções e ofertas de restaurantes, hospedagem e passeios. O VOE se conectará com parceiros e garantir que você tenha acesso a opções que caiba no seu orçamento.</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker"  style="background-color:#77a0d8">
        <div class="container container-wide">
          <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
            
          <!-- ICONE DO FOOTER -->
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left">
              <a href="about-us.php">
                <img class="inverse-logo" src="images/logo-voe.png" alt="" width="250" height="60" style="max-width: 100%;"/>
              </a>
            </div>
            
            <!-- COPYRIGHT DO FOOTER -->
            <div class="col-md-10 col-lg-7 col-xl-4">
              <p class="right" style="color: black; font-size: 18px;">&nbsp;<span class="copyright-year"></span> Todos os direitos reservados. Desenvolvido&nbsp;por&nbsp;<a href="#">Matheus Baptista</a></p>
            </div>  

            <!-- ICONES DO FOOTER -->
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
            <ul style="display: flex; justify-content: flex-end; gap: 10px; padding: 0; margin: 0; list-style: none;"> 
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#" style="font-size: 50px;"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#" style="font-size: 50px;"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="#" style="font-size: 50px;"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-whatsapp" href="#" style="font-size: 50px;"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by barber-->
  </body>
</html>