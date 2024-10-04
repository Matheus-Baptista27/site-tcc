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
    <title>Home</title>
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

      <!-- Contact info-->
      <section class="section section-lg bg-default text-center">
        <div class="container container-wide">
          <div class="row row-fix row-50 row-custom-bordered">
            <div class="col-sm-6 col-lg-3">
              <!-- Box minimal-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-map-marker"></div>
                <h6>Endereço</h6>
                <div class="box-simple-text"><a href="#">1234 Centro, Taquara, RS <br> 95607-710</a></div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-phone"></div>
                <h6>Telefone/Whatsapp</h6>
                <div class="box-simple-text">
                  <ul class="list-comma list-0">
                    <li><a href="tel:#">55991470000</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-email-open"></div>
                <h6>E-mail</h6>
                <div class="box-simple-text">
                  <ul class="list-comma list-0">
                    <li><a href="mailto:#">voe@email.com</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-calendar-clock"></div>
                <h6>Horário de Funcionamento</h6>
                <div class="box-simple-text">
                  <ul class="list-0">
                    <li>Seg a Sex: 08:00hrs as 18:00hrs </li>
                    <li>Sáb: 08:00hrs as 12:00hrs</li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact us-->
      <section class="section section-wrap bg-gray-lighter novi-background bg-cover">
        <div class="section-wrap-inner">
          <div class="container container-bigger">
            <div class="row row-fix row-50">
              <div class="col-lg-8 col-xl-7">
                <div class="section-wrap-content section-lg">
                  <h3>Contate-nos</h3>
                  <hr class="divider divider-left divider-secondary">
                  <p class="big">Você pode entrar em contato conosco de qualquer maneira que seja conveniente para você. Você também pode usar um formulário de contato rápido abaixo ou visitar nosso escritório pessoalmente.</p>
                  <!-- FORMULARIO PARA CONTATO-->
                  <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-fix row-20">
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-name">Nome</label>
                          <input class="form-input" id="form-1-name" type="text" name="name" data-constraints="@Required"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-last-name">Sobrenome</label>
                          <input class="form-input" id="form-1-last-name" type="text" name="last-name" data-constraints="@Required"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-email">E-mail</label>
                          <input class="form-input" id="form-1-email" type="email" name="email" data-constraints="@Email @Required"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-phone">Telefone</label>
                          <input class="form-input" id="form-1-phone" type="text" name="phone" data-constraints="@Numeric @Required"/>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-message">Mensagem</label>
                          <textarea class="form-input" id="form-1-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12 offset-custom-1">
                        <div class="form-button">
                          <button class="button button-secondary button-nina" type="submit">Enviar mensagem</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="section-wrap-aside">
            <!-- RD Google Map-->
            <div class="google-map-container google-map-with-icon rd-google-map__model" data-zoom="5" data-center="-29.6500, -50.7800" data-icon="images/" data-icon-active="images/" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
              <div class="google-map"></div>
              <ul class="google-map-markers">
                <li data-location="-29.6500, -50.7800" data-description="Centro de Taquara, Rio Grande do Sul"></li>
              </ul>
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