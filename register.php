<?php
// Iniciar a sessão
session_start();

// Incluir a conexão com o banco de dados
include 'conn.php';

// Variável para armazenar mensagens de erro ou sucesso
$mensagem = '';


?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-BR"> 
  <head>
    <!-- Site Titulo-->
    <title>Cadastro de Estabelecimento</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/register.css">
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

  <section>
    <div class="container">
        <!-- Mensagem de Benefício -->
        <div class="benefit-message" style="text-align: center;">
            Cadastre seu estabelecimento e tenha preferência na visualização, atraindo mais clientes para o seu negócio!
        </div>

        <h2 style="text-align: center;">Cadastro de Estabelecimentos</h2>

        <!-- Mensagem de Sucesso ou Erro -->
        <?php echo $mensagem; ?>

        <!-- Formulário de Cadastro -->
        <form action="cadastro-bd.php" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 2rem auto; background-color: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            
            <!-- Nome do Estabelecimento -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="nome" style="display: block; margin-bottom: 0.5rem;">Nome do Estabelecimento<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="nome" name="nome" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Email -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="email" style="display: block; margin-bottom: 0.5rem;">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Telefone -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="telefone" style="display: block; margin-bottom: 0.5rem;">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            
            <!-- Cidade -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="cidade" style="display: block; margin-bottom: 0.5rem;">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Endereço -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="endereco" style="display: block; margin-bottom: 0.5rem;">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            
            <!-- Estado -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="estado" style="display: block; margin-bottom: 0.5rem;">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- CEP -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="cep" style="display: block; margin-bottom: 0.5rem;">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Tipos do Estabelecimento -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="tipo" style="display: block; margin-bottom: 0.5rem;">Tipo de Estabelecimento</label>
                <select class="form-control" id="tipo" name="tipo" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; height: auto;">
                    <option value="">Selecione o estabelecimento</option>
                    <option value="Hotel">Hotel ou Pousada</option>
                    <option value="Restaurantes">Restaurantes</option>
                    <option value="Lancherias">Lancherias</option>
                    <option value="Lazer-Passeios">Lazer e Passeios</option>
                </select>
            </div>

            <!-- Tipos de Locais -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="local" style="display: block; margin-bottom: 0.5rem;">Tipo de local em que seu estabelecimento se encontra</label>
                <select class="form-control" id="local" name="local" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; height: auto;">
                    <option value="">Selecione o local</option>
                    <option value="cidade">Cidade</option>
                    <option value="interior">Interior</option>
                    <option value="lazer">Lazer</option>
                    <option value="serra">Serra</option>
                    <option value="praia">Praia</option>
                </select>
            </div>
            
            <!-- Valor Aproximado para Refeição ou Hospedagem -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="valor" style="display: block; margin-bottom: 0.5rem;">Valor Aproximado (R$ - Por Pessoa)</label>
                <input type="number" class="form-control" id="valor" name="valor" step="0.01" placeholder="Ex: 100.00" style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- IMAGEM REFERENCIA PARA O ESTABELECIMENTO -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label for="foto" style="display: block; margin-bottom: 0.5rem;">Imagem Estabelecimento</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" style="width:100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <!-- Preferência de Visualização -->
            <div class="form-group" style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem;">
                    <input type="checkbox" name="preferencia" value="1" style="margin-right: 0.5rem;"> Desejo ter preferência na visualização
                </label>
            </div>

            <!-- BOTÃO DE CADASTRAR  -->
            <div class="form-button" style="text-align: center; margin-top: 1.5rem;">
            <input type="hidden" name="acao" value="cadastrar">
            <button type="submit" class="btn-submit" style="padding: 0.75rem 1.5rem; background-color: #77a0d8; color: white; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;" 
                onmouseover="this.style.backgroundColor='#a0c4e1';" 
                onmouseout="this.style.backgroundColor='#77a0d8';">
                Cadastrar Estabelecimento
            </button>
        </div>
        </form>

        </div>
    </section>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>