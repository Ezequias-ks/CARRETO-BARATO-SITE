<?php 
session_start();
// CONEXÃO
require_once ('action/conexao.php');
// HEADER 
include_once ('includes/header.php'); 
?>
<div class="position-relative">
    <div class="position-absolute" id="toast-place"></div>
</div>
<section class="header">              
    <!-- NAV -->
    <header id="header">
        <div class="header-content clearfix">
            <a class="logo" href="#"><img src="images/Icons/logoCarretoBaratoColor.svg" alt="logo"></a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a id="_link" href="#about">Sobre</a></li>
                    <li><a id="_link" href="#service">Serviços</a></li>
                    <li><a id="_link" href="#logistics">Logística</a></li>
                    <li><a id="_link" href="#calc">Sua Rota</a></li>
                    <li><a id="_link" href="#cadastro">Cadastro</a></li>
                    <li><a id="_link" href="#contact">Contato</a></li>
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
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bannerImage1"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Seu Carreto Inteligênte</h5>
                    <p>Rápido, Barato e Seguro</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bannerImage2"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>ligou, chegou !</h5>
                    <p>A carreto sempre a disposição.</p>
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
                                <img src="images/Icons/logoAvs.svg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>"Satisfação total, Mudanças elaborada com sucesso!."</p>
                                <cite class="author">Empresa AVS Group</cite>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-6">
                            <div class="avatar">
                                <img src="images/Icons/logoAvs.svg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>"Carreto efuado dentro do prazo estabelecido"</p>
                                <cite class="author">Lorem ipsum dolor sit amet.</cite>
                            </blockquote>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
  
<?php 
// CALCULATOR E FORM
include_once './includes/calculator.php'; 

// TRABALHE CONNOSCO
include_once './includes/cadastro.php';

// FOOTER 
include_once './includes/footer.php'; 
?>