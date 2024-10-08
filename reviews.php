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
    <title>Avaliações</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
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
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap rd-navbar-corporate">
    <nav class="rd-navbar" style="background-color:#77a0d8; position: relative; transition: top 0.3s;">
      <div class="rd-navbar-inner">
        <!-- RD Navbar PAINEL-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar MARCA-LOGO-->
          <div class="rd-navbar-brand">
            <a class="brand-name" href="index.php">
              <img class="logo-default" src="images/logo-voe.png" alt="" width="200" height="100"/>
            </a>
          </div>
        </div>
        <div class="rd-navbar-aside-center">
          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
              <!-- Verifica qual página está ativa e aplica a classe 'active' -->
              <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <a href="index.php">Início</a>
              </li>
              <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : ''; ?>">
                <a href="about-us.php">Sobre Nós</a>
              </li>
              <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : ''; ?>">
                <a href="contacts.php">Contato</a>
              </li>
              <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'reviews.php' ? 'active' : ''; ?>">
                <a href="reviews.php">Avaliações</a>
              </li>
              <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">
                <a href="register.php">Cadastre sua Empresa</a>
              </li>
              <li><a href="#">Sair</a></li>
            </ul>
          </div>
        </div>
        <!-- Botão Reserve seu Destino -->
        <a class="btn btn-lg w-10"
          href="index.php"
          style="background-color: #77a0d8; color: white; border: 2px solid #ffff;"
          onmouseover="this.style.backgroundColor='#a0c4e1';"
          onmouseout="this.style.backgroundColor='#77a0d8';">
          Reserve seu destino
        </a>
      </div>
    </nav>
  </div>
</header>

        <!-- section wave-->
        <div class="section-wave">
          <svg x="0px" y="0px" width="1920px" height="45px" viewbox="0 0 1920 45" preserveAspectRatio="none">
            <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7 c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6 C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z"></path>
          </svg>
        </div>
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <ul class="list-xl">
                <li>
                  <h1>Avaliações dos Usuários</h1>
                  <p>Bem-vindo à nossa página de avaliações! 
                    Aqui você pode conferir o que nossos viajantes e exploradores têm a dizer sobre suas experiências
                    com o VOE - Viva o Explorar. Nosso objetivo é proporcionar a você as melhores sugestões de destinos,
                    passeios e restaurantes, sempre de acordo com suas preferências e necessidades.
                    Cada avaliação é essencial para que possamos melhorar continuamente nossos serviços e garantir que 
                    sua próxima viagem seja ainda mais incrível. Confira as recomendações, dê sua opinião e inspire-se 
                    com as histórias e experiências compartilhadas por outros usuários!</p>
                </li>
                <li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Blockquote-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Feedbacks</h3>
              <article class="quote-primary">
                <svg class="quote-primary-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                  <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                </svg>
                <div class="quote-primary-text">
                  <p>Alguma mensagem de avaliações dos usuarios sobre o sistema  </p>
                </div>
                <p class="quote-primary-meta"><span>Por</span><span class="cite">Matheus Baptista</span></p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- ELEMTENTOS DE TEXTO HTML-->
      <!--<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>HTML Text Elements</h3>
              <ul class="list-xs">
                <li><a href="#">Link text</a></li>
                <li><a class="link-hover" href="#">Hover link text</a></li>
                <li><span class="font-weight-bold">Bold Text</span></li>
                <li><span class="font-italic">Italic Text</span></li>
                <li>
                  <mark>This is a highlighted text</mark>
                </li>
                <li><span class="text-strike">This is a strikethrough text</span></li>
                <li><span class="text-underline">This is an underlined text.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>-->

      <!-- LISTA NÃO ORDENADA -->
      <!--<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 row-fix">
            <div class="col-lg-10 col-xl-8">
              <h3>Unordered List</h3>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ul class="list-marked">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ul>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section> -->

      <!-- lISTA DE OBSERVAÇÕES E ICONES NESTA SESSAO-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-fix">
            <div class="col-sm-12">
              <h3>Oferecemos</h3>
              <div class="row row-30">
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-megaphone11"></div>
                      <h6 class="box-minimal-title">Melhor serviço</h6>
                    </div>
                    <div class="box-minimal-text">O VOE  foi criado para facilitar a descoberta de destinos que atendem às suas preferências, oferecendo o melhor serviço, reconhecemos a importância de uma plataforma que conecte viajantes a destinos que realmente atendam seus desejos.</div>
                  </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-note35"></div>
                      <h6 class="box-minimal-title">Reputação</h6>
                    </div>
                    <div class="box-minimal-text">Somos reconhecidos pela confiança e qualidade, o VOE se destaca por ajudar viajantes a encontrar os melhores destinos de forma personalizada. Nossa reputação é construída por avaliações positivas e experiências únicas de usuários satisfeitos.</div>
                  </article>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                  <article class="box-minimal">
                    <div class="box-minimal-header">
                      <div class="box-minimal-icon fl-bigmug-line-square160"></div>
                      <h6 class="box-minimal-title">Indicações seguras</h6>
                    </div>
                    <div class="box-minimal-text">As indicações do VOE - Viva o Explorar são cuidadosamente selecionadas para garantir segurança e qualidade. Cada recomendação é baseada em avaliações confiáveis e verificadas, para que você possa explorar novos destinos com tranquilidade.</div>
                  </article>
                </div>
              </div>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by barber-->
  </body>
</html>