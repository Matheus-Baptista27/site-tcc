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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
          href="#"
          style="background-color: #77a0d8; color: white; border: 2px solid #ffff;"
          onmouseover="this.style.backgroundColor='#a0c4e1';"
          onmouseout="this.style.backgroundColor='#77a0d8';">
          Reserve seu destino
        </a>
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
                <form class="rd-mailform form-fix" action="processa-formulario.php" method="POST">
                  <div class="row row-20 row-fix">
                    
                    <!-- INDICAÇÃO DO VALOR DESEJADO -->
                    <div class="col-sm-12 col-lg-6">
                      <label class="form-label-outside">Valor desejado de investimento (R$)</label>
                      <div class="form-wrap form-wrap-validation">
                        <input class="form-input" id="investmentValue" name="valor_investimento" type="text" placeholder="Digite o valor desejado">
                      </div>
                    </div>

                    <script>
                      document.getElementById('investmentValue').addEventListener('input', function (e) {
                        let value = e.target.value.replace(/\D/g, '');
                        value = (value / 100).toFixed(2);
                        e.target.value = `R$ ${value}`;
                      });
                    </script>

                    <!-- DESTINO -->
                    <div class="col-sm-12">
                      <label class="form-label-outside">De</label>
                      <div class="form-wrap form-wrap-inline">
                        <select class="form-input select-filter" name="cidade_de">
                          <?php while($row = mysqli_fetch_assoc($result_de)): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['local']; ?></option>
                          <?php endwhile; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label class="form-label-outside">Para</label>
                      <div class="form-wrap form-wrap-inline">
                        <select class="form-input select-filter" name="cidade_para">
                          <?php while($row = mysqli_fetch_assoc($result_para)): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['local']; ?></option>
                          <?php endwhile; ?>
                        </select>
                      </div>
                    </div>

                    <!-- INDICAÇÃO DA DATA INICIO E FIM PARA A VIAGEM -->
                    <div class="col-sm-12 col-lg-6">
                      <label class="form-label-outside">Data Início</label>
                      <div class="form-wrap form-wrap-validation">
                        <input class="form-input" id="dateForm" name="data_viagem" type="date">
                        <label class="form-label" for="dateForm"></label>
                      </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                      <label class="form-label-outside">Data Fim</label>
                      <div class="form-wrap form-wrap-validation">
                        <input class="form-input" id="dateForm" name="data_viagem" type="date">
                        <label class="form-label" for="dateForm"></label>
                      </div>
                    </div>
                    
                    <!-- DIAS DISPONÍVEIS 
                    <div class="col-sm-12 col-lg-6">
                      <label class="form-label-outside">Dias disponíveis</label>
                      <div class="form-wrap form-wrap-validation">
                        <select class="form-input select-filter" name="dias_permanencia">
                          <option value="">Quantos dias?</option>
                          <option value="1">1 dia</option>
                          <option value="2">2 dias</option>
                          <option value="3">3 dias</option>
                          <option value="4">4 dias</option>
                          <option value="5">5 dias</option>
                          <option value="6">6 dias</option>
                        </select>
                      </div>
                    </div>-->

                    <!-- TIPO DE ESTABELECIMENTO -->
                    <div class="col-sm-12">
                      <label class="form-label-outside">Tipo de Estabelecimento</label>
                      <div class="form-wrap form-wrap-inline">
                        <div class="checkbox-group" style="display: flex; flex-wrap: wrap; gap: 1rem;">
                          <div class="col-md-6" style="display: flex; flex-direction: column;">
                            <label style="margin-bottom: 0.5rem;">
                              <input type="checkbox" name="establishment_type[]" value="hotel"> Hotel e Pousada
                            </label>
                            <label style="margin-bottom: 0.5rem;">
                              <input type="checkbox" name="establishment_type[]" value="restaurante"> Restaurante
                            </label>
                            <label style="margin-bottom: 0.5rem;">
                              <input type="checkbox" name="establishment_type[]" value="cafe"> Lancherias
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- TIPO DE LOCAL -->
                    <div class="col-sm-12 col-lg-6">
                      <label class="form-label-outside">Locais desejados</label>
                      <div class="form-wrap form-wrap-validation">
                        <select class="form-input select-filter" name="tipo_local">
                          <option value="">Tipos de lugares</option>
                          <option value="cidade">Cidade</option>
                          <option value="interior">Interior</option>
                          <option value="lazer">Passeio de lazer</option>
                        </select>
                      </div>
                    </div>
                    
                    <!-- BOTÃO DE PESQUISA -->
                    <div class="col-sm-12 col-lg-12">
                      <div class="form-button">
                        <button class="button button-secondary button-nina" id="btn-pesquisar" type="submit">Pesquisar Destino</button>
                      </div>
                    </div>
                  </div>
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