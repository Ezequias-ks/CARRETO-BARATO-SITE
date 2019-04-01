<?php require_once 'action/conexao.php'?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carreto Barato</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="96x96" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

     <!-- JQUERY / POOPER -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- CSS INTERNO -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- GOOGLE API -->

</head>
<body>
   <section class="header">              
        <!-- HEADER -->
        <header id="header">
            <div class="header-content clearfix">
                <a class="logo" href="#"><img src="images/logo-carreto-barato-white.png" alt="logo"></a>
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#service">Serviços</a></li>
                        <li><a href="#logistics">Logística</a></li>
                        <li><a href="#calc">Calcule Rota</a></li>
                        <li><a href="#cadastro">Cadastro</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a>
            </div>
        </header>

        <!-- BANNER -->
        <div id="indicador" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#indicador" data-slide-to="0" class="active"></li>
                <li data-target="#indicador" data-slide-to="1"></li>
                <li data-target="#indicador" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bannerImage"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>titulo</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bannerImage"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>titulo</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bannerImage"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>titulo</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#indicador" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#indicador" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class=" about section">
        <h1>A Empresa</h1>
        <div class="container">
            <div class="row">
                <div class=" content text-justify">
                    <p><span>A Carreto Barato</span>&nbsp;&nbsp;&nbsp;A Carreto Barato iniciou sua história em 1995, fundada com muita motivação, paixão e dedicação foram evoluindo e conquistando clientes e crescendo por toda a região metropolitana de são Paulo. Somos Gerenciados pela AVS GROUP.</p>
                    <p>Expandindo nossos trajetos da capital para todo território brasileiro, e com isso os negócios melhoraram muito, conquistando a confiança de nossos clientes e tornando a Carreto Barato que é hoje.</p>
                    <p>Com frota moderna nossos clientes estão muito satisfeitos, pois tem um time de profissionais muito capacitado e preparado para atender diversos segmentos com inovação, pois são treinados para serem cortês e educados.</p>
                    <p>motoristas passam por reciclagem com freqüência de forma a estarem preparados para o trânsito carregado do dia-a-dia.</p>
                </div>
                <div class="col-md-4 col-sm-6 text-justify">
                    <H5>Nosso Compromisso</H5>
                    <p>Transportar cargas com preços compatíveis e no prazo requerido; Cumprir rigorosamente a legislação e normas aplicáveis ao negócio, requisitos e compromissos assumidos; Aperfeiçoamento contínuo; política de incentivo e motivação de nossos colaboradores;</p>
                </div>
                <div class="col-md-4 col-sm-6 text-justify">
                    <h5>Nossa Missão</h5>
                    <p> Atuar com foco na diminuição de acidentes, danos ambientais e poluição; Prover locais seguros e saudáveis para assegurar a integridade física de nossos colaboradores e clientes;</p>
                </div>
                <div class="cemporcento col-md-4 col-sm-6 text-justify">
                    <h5>Nossos Valores</h5>
                    <p>Manter fluxo de informação com qualidade; Não assumir compromissos acima de nossa capacidade</p>
                </div>
            </div>
        </div>
    </section>
    
    <!--SERVICES -->
    <section id="service" class="section">
            <h1>Serviços</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 text-center">
                        <i class="fas fa-truck-loading"></i>
                        <div class="content">
                            <h5>Carga e Descarga</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  text-center">
                        <i class="fas fa-boxes"></i>
                        <div class="content">
                            <h5>Embalagem</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  text-center">
                            <i class="fas fa-city"></i>
                        <div class="content">
                            <h5>Mudanças Comerciais</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  text-center">
                        <i class="fas fa-home"></i>
                        <div class="content">
                            <h5>Mudanças Residênciais</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  text-center">
                        <i class="fas fa-people-carry"></i>
                        <div class="content">
                            <h5>Logística</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  text-center">
                        <i class="fas fa-route"></i>
                        <div class="content">
                            <h5>Rotas Express</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--IMAGES -->
    <section id="works" class="works section no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/02.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/02.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/03.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/03.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/04.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/04.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/05c.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/05c.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/07.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/07.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/08.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/08.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/06c.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/06c.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work">
                    <a href="images/Services/02.jpg" class="work-box">
                        <div class="boxImage">
                            <img src="images/Services/02.jpg" alt="">
                        </div>
                        <div class="overlay">
                            <div class="overlay-caption">
                                <h5>Titulo</h5>
                                <p>Descricao</p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- LOGISTICA -->
    <section id="logistics" class="section">
        <h1>A logística</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="log">
                        <i class="fas fa-laptop"></i>
                        <div class="log-content">
                            <div class="box">
                                <h4>01</h4>
        <i class=" icon fas fa-angle-right"></i>
                            </div>
                            <h5 class="role">Contate-nos</h5>
                            <p>Através do site ou do nosso app, O cliente faz uma pequena consulta da distância e valor do carreto, seguindo o passo 1 e 2.</p>
                        </div>
                    </div><!-- log -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="log">
                        <i class="fas fa-shipping-fast"></i>
                        <div class="log-content">
                            <div class="box">
                                <h4>02</h4>
        <i class="icon fas fa-angle-right"></i>
                            </div>
                            <h5 class="role">Locomoção / Frota / caminhões</h5>
                            <p>Após o pedido, entraremos em contato e enviáremos uns dos nossos caminhões de nossa frota, ao local de origem.</p>
                        </div>
                    </div><!-- log -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="log">
                        <i class="fas fa-dolly"></i>
                        <div class="log-content">
                            <div class="box">
                                <h4>03</h4>
        <i class="icon fas fa-angle-right"></i>
                            </div>
                            <h5 class="role">Carga / Embalagem</h5>
                            <p>Com profissionais bem treinados, fazemos toda a parte de embalagem e carregamento seguro.</p>
                        </div>
                    </div><!-- log -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="log">
                        <i class="fas fa-map-marked-alt"></i>
                        <div class="log-content">
                            <div class="box">
        <i class="icon fas fa-angle-right"></i>
                                <h4>04</h4>
                            </div>
                            <h5 class="role">Trajeória / Destino</h5>
                            <p>Após todo carregamento e embalagem, seguimos ao destino, buscando uma trajeto seguro e rápido.</p>
                        </div>
                    </div><!-- log -->
                </div>
            </div>
        </div>
    </section>

    <!-- TESTEMONIALS -->
    <section id="testimonials" class="section testimonials no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- flexslider -->
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-6">
                                <div class="avatar">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                    <p>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui."</p>
                                    <cite class="author">Lorem ipsum dolor sit amet.</cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-6">
                                <div class="avatar">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                    <p>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui."</p>
                                    <cite class="author">Lorem ipsum dolor sit amet.</cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-6">
                                <div class="avatar">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                    <p>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui."</p>
                                    <cite class="author">Lorem ipsum dolor sit amet.</cite>
                                </blockquote>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CALCULATOR E FORM-->
    <section  id="calc" class="calcRota section form">
        <div class="container-fluid ">	
            <div class="card">
                <div class="card-header">
                    <h1>Calcule seu frete aqui..</h1>
                    <p><span class="bolding">1</span> - Calcule o seu frete, inserindo o a Origem e Destino, e clique em <span class="border-btt">CALCULAR</span>.</p>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <form onsubmit="getDistanceValue(); return false">
                            <div class="form-group">		
                                <label for="origem">Origem</label>
                                <input type="text" class="form-control" id="origin" placeholder="Endereço de Origem..."/>  
                            </div>
                            <div class="form-group">
                                <label for="destination">Destino</label>
                                <input type="text" class="form-control" id="destination" placeholder="Endereço de Destino...">
                            </div>
                            <input type="button" value="Calcular" class="btn btn-primary" onclick="getDistanceValue()"/>
                        </form> 


                        <!-- RESULTADO DA CONSULTA -->
                        <ul class="list-group" id="calRersult"></ul>
                    

                        <form action="./action/get_dados.php" method="POST">
                                <p><span class="bolding">2</span> - Após calcular a sua distância, preenche abaixo os dados e clique em <span class="border-btt">ENVIAR PEDIDO</span></p>
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu Nome...">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu email...">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefone</label>
                                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Seu telefone...">
                                </div>
                            <button type="submit" name="btn_enviar" class="btn btn-large animated tada">Enviar Pedido</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- TRABALHE CONNOSCO -->
     <section id="cadastro" class="section">
          <div class="card-body">
               <h1>Cadastre seus dados aqui, e vem trabalhar conosco</h1>
               <div class="card-text">
                    <form class="form-cadastro" action="./action/get_cadastro.php" method="POST">

                        <!-- DADOS PESSOAIS -->
                        <div class="grupoA form-group">
                            <h4 class="text-left">Seus dados Pessoais :</h4>
                            <div class="form-group col-md-6">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome completo ...">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Seu email...">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="tel">Telefone:</label>
                                <input type="tel" id="tel" name="tel" class="form-control" placeholder=" (000) 99999-9999">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="data-nasc">Data de Nasc.:</label>
                                <input type="date" id="data-nasc" name="data_nasc" class="form-control" placeholder="Sua data de nascimento ...">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="rg">RG:</label>
                                <input type="text" id="rg" name="rg" class="form-control" placeholder="Seu RG...">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cpf">CPF:</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Seu CPF...">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cnh">CNH:</label>
                                <input type="text" id="cnh" name="cnh" class="form-control" placeholder="Sua CNH...">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Categoria :</label>
                                <select name="categoria" class="form-control">
                                    <option value="categoria-C">C</option>
                                    <option value="categora-D">D</option>
                                </select>
                            </div>
                        </div>

                        <!--DADOS ENDERECO -->
                        <div class="grupoB form-group">
                            <h4 class="text-left">Seu endereço :</h4>
                            <div class="form-group col-md-6">
                                <label for="">Rua:</label>
                                <input type="text" id="rua" name="rua" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">  
                                <label for="numero">N°:</label>
                                <input type="text" id="numero" name="numero" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Bairro:</label>
                                <input type="text" id="bairro" name="bairro" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Estado:</label>
                                <input type="text" id="estado" name="estado" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" maxlength="2" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">CEP:</label>
                                <input type="text" id="cep" name="cep" class="form-control" placeholder="">
                            </div>
                        </div>
                        
                        <!-- DADOS DO VEÍCULO -->
                        <div class="grupoC form-group">       
                            <h4 class="text-left">Seu Veículo :</h4>
                            <div class="form-group col-md-6">
                                <label for="marca">Marca</label>
                                <input type="text" id="marca" name="marca" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="modelo">Modelo :</label>
                                <input type="text" id="modelo" name="modelo" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="placa">PLaca :</label>
                                <input type="text" id="placa" name="placa" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ano_fabrica">Ano de fabricação :</label>
                                <input type="date" id="ano_fabrica" name="ano_fabrica" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="capacidade">Capacidade de Peso :</label>
                                <input type="text" id="capacidade" name="capacidade" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Tipo de Báu :</label>
                                <select name="tipo_bau" class="form-control">
                                    <option value="aberto">Aberto</option>
                                    <option value="fechado">Fechado</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="btn_cadastrar" class="btn btn-large animated tada">Cadastrar</button>
                    </form>
               </div> 
          </div>
     </section>

    <!-- FOOTER -->
    <footer id="contact" class="footer section">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h5>Localização</h5>
                        <p><i class="fas fa-map-marker-alt"></i> Brazil<br>Rua Alceu Wamosy, 70<br>Vila Mariana</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h5>Redes Sociais</h5>
                        <ul class="footer-share">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h5>Carreto Barato</h5>
                        <div class="footer-box"> 
                            <div class="content-box">
                                <div class="box">
                                    <span><i class="fab fa-whatsapp"></i></span>
                                    <span><a href="tel:+011 4214-7938">(011) 4214-7938</a></span>
                                </div>
                                <div class="box">
                                    <span><i class="far fa-envelope"></i></span>
                                    <a href="mailto:contato@carretobarato.com.br"><span>contato@carretobarato.com.br</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-col col-md-4">
                    <h5>trabalhamos com</h5>
                    <div class="cards">
                        <span><i class="fab fa-cc-mastercard"></i></span>
                        <span><i class="fab fa-cc-visa"></i></span>
                        <span><i class="fab fa-cc-amex"></i></span>
                        <span><i class="fab fa-cc-diners-club"></i></span>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="col-md-12">
                        <p>Copyright © 2019. Carreto Barato <br>todos direitos reservados<br>Desenvolvido <i class="fa fa-circle"></i> por <a href="http://agenciaksdesign.com/" target="_blank">ks design</a></p>
                    </div>
                </div>
            </div>
        </div><!-- footer top -->
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/calc.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js"></script>
    
</body>
</html>