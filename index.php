<?php
    include 'conn.php';

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site-voe";

    $sql = "SELECT * FROM locais";
    $result_locais = mysqli_query($conn, $sql);
    $locais = [];
    while ($row = mysqli_fetch_assoc($result_locais)) {
        $locais[] = $row;
    }
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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="css/fonts.css"> 
  
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


        <!-- controle do scrooll do mouse -->
        <script>
          let lastScrollTop = 0;
          const navbar = document.querySelector('.rd-navbar');

          window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
              // ao rolar para baixo, esconde a navbar
              navbar.style.top = '-100px';  
            } else {
              // ao rolar para cima mostra a navbar
              navbar.style.top = '0';
            }

            lastScrollTop = scrollTop;
          });
        </script>

    <section class="section">
      <div class="swiper-form-wrap">
        <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="" style="background-color:#a9a9a9">
              <div class="swiper-slide-caption">
                <div class="container container-bigger swiper-main-section">
                  <div class="row row-fix justify-content-sm-center justify-content-md-start">
                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                      <h3>VOE - VIVA O EXPLORAR</h3>
                      <div class="divider divider-decorate"></div>
                      <p class="text-spacing-sm" style="color: white;">Quem nós somos?
                            O Site ajudará o você que deseja sair da sua rotina e gosta de viajar e
                            deseja passar algum período de férias ou folgas mas não tem idéia que que lugar ou cidade deseja ir ou conhecer, 
                            você nos indicará valor que deseja investir, quais tipos climáticos que deseja conhecer, 
                            quais os dias disponíveis para tal passeio, 
                            distância máxima que pretende deslocar-se ou quanto tempo de viagem deseja fazer até local desejado, 
                            condições de pagamento,tipos de restaurantes entre outras informações. 
                            Com base nessas informações nós iremos lhe indicar os locais em que se enquadram nas suas solicitações e 
                            irá dar algumas sugestões de lugares a visitar para passar o dia,final de semana ou até mesmo o período de férias.</p>
                            <a class="btn btn-lg"
                              href="#"
                              style="background-color: #77a0d8; color: white; border: 2px solid #77a0d8;"
                              onmouseover="this.style.backgroundColor='#a0c4e1';"
                              onmouseout="this.style.backgroundColor='#77a0d8';">
                              SABER MAIS
                            </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container container-bigger form-request-wrap form-request-wrap-modern">
          <div class="row row-fix justify-content-sm-center justify-content-lg-end">
            <div class="col-lg-6 col-xxl-5">
              <div class="form-request form-request-modern bg-gray-lighter">
                <h4>Encontre seu Destino</h4>

                <!-- Formulário -->
                <form action="processa-formulario.php" method="POST">
                  <!-- Valor de Investimento -->
                  <div class="form-group">
                    <label for="valor_investimento">Valor de Investimento (R$)</label>
                    <input type="text" name="valor_investimento" id="valor_investimento" class="form-control" placeholder="Ex: 1000">
                  </div>

                  <!-- Cidade de Origem -->
                  <div class="form-group">
                    <label for="cidade_de">Cidade de Origem</label>
                    <input type="text" name="cidade_de" id="cidade_de" class="form-control" placeholder="Ex: Porto Alegre">
                  </div>

                  <!-- Cidade de Destino -->
                  <div class="form-group">
                    <label for="cidade_para">Cidade de Destino</label>
                    <input type="text" name="cidade_para" id="cidade_para" class="form-control" placeholder="Ex: Florianópolis">
                  </div>

                  <!-- Tipo de Local -->
                  <div class="form-group">
                    <label for="local">Tipo de Local</label>
                    <select name="local" id="local" class="form-control">
                      <option value="">Selecione</option>
                      <option value="cidade">Cidade</option>
                      <option value="interior">Interior</option>
                      <option value="lazer">Lazer</option>
                      <option value="serra">Serra</option>
                      <option value="praia">Praia</option>
                      <!-- Adicione mais opções conforme necessário -->
                    </select>
                  </div>

                  <!-- Tipos de Estabelecimento -->
                  <div class="form-group">
                    <label>Tipos de Estabelecimento</label>
                    <div class="form-check">
                      <input type="checkbox" name="tipo[]" value="restaurantes" class="form-check-input" id="restaurantes">
                      <label class="form-check-label" for="restaurantes">Restaurantes</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="tipo[]" value="hotel" class="form-check-input" id="hotel">
                      <label class="form-check-label" for="hotel">Hotel</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="tipo[]" value="pousada" class="form-check-input" id="pousada">
                      <label class="form-check-label" for="pousada">Pousada</label>
                    </div>
                    <!-- Adicione mais opções conforme necessário -->
                  </div>

                  <button type="submit" class="btn btn-primary">Pesquisar</button>
                </form>

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
    
    <!-- jQuery, Popper.js e Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by barber-->
  </body>
</html>