<?php

    
require_once "./controladores/vistasControlador.php";
$instanciaVistas = new vistasControlador();

$vistas= $instanciaVistas->obtener_vistas_controlador();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>CONSTRUCCIONES GRV</title>
    <?php include  "./vistas/includes/link.php";?>
</head><!--/head-->

<body id="home" class="homepage">


    <header id="top-header" class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a class="smooth-scroll" data-section="#home" href="#home" >
                            <h4 style="color: aliceblue;"> CONSTRUCCIONES G.R.V <span><i class="fas fa-wrench"></i> </span></h4>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="scroll"><a href="#home" data-section="#home">Home</a></li>
                            <li class="scroll"><a href="#about" data-section="#about">Acerca</a></li>
                            <li class="scroll"><a href="#features" data-section="#features">Nosotros</a></li>
                            <li class="scroll"><a href="#services" data-section="#services">Servicios</a></li>
                            <li class="scroll"><a href="#portfolio" data-section="#portfolio">Obras</a></li>
                            <li class="scroll"><a href="#contact-area" data-section="#contact-area">Contacto</a></li>   
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(vistas/img/slider/foto1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>REPARACION DE TECHOS - PISOS - PAREDES <span>CONSTRUIMOS</span>.</h2>
                                     <h3 style="color: aliceblue;">PRESUPUESTO SIN CARGO</h3>
                                    <a class="btn btn-primary btn-lg" href="#contact-area">CONTACTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(vistas/img/slider/foto2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">

                                    <h2>EXPERIENCIA Y <span>TRAYECTORIA</span></h2>
                                    <p>Realizamos todo tipo de trabajo con presupuesto sin cargo.</p>
                                    <a class="btn btn-primary btn-lg" href="#contact-area">CONTACTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(vistas/img/slider/foto3.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2> <span>CONSULTAS Y URGENCIAS LAS</span> 24HS</h2>
                                    <h3 style="color: white;">ZINGUERIA DE OBRA - CHAPAS ACANALADAS - CHAPAS EXAGONALES - REPARACIONES. </h3>
                                    <a class="btn btn-primary btn-lg" href="#contact-area">CONTACTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">OBRAS Y TRABAJOS DE TODO TIPO</h2>
                <p class="text-center wow fadeInDown">PLOMERIA - GASISTA - REFRIGERACION <br> </p>
            </div>Gustavo Videla

            <div class="row">
                

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Experiencia</h3>
                    <p>Durante mas de 15 años de trabajo y compromiso frente a cada emprendimiento hemos adquirido la experiencia y solvencia necesaria para realizar con rapidez y compromiso cada trabajo referente a la construccion y servicios.</p>

                    <p>Hemos realizado trabajos de todo tipo desde techos,paredes,plomeria,herreria o cualquier compromiso que se refiera al trabajo de obra. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis accusantium eligendi ratione asperiores facilis. Accusantium voluptatem, cupiditate impedit soluta error fugit fuga eligendi porro odio iure optio explicabo atque eaque.</p>

                    <a class="btn btn-primary" href="#">CONTACTAME</a>

                </div>
                <div class="col-sm-6 wow fadeInLeft imgdibu">
                    <img  class="img-responsive mb-5" src="vistas/img/obrero2.png" alt="">
                </div>
            </div>
        </div>
    </section><!--/#about-->



    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Algunos Servicios</h2>
                <p class="text-center wow fadeInDown">Con mas de 15 años de experiencia y trayectoria en el rubro de construccion, ofrecemos servicios precisos y completos con presupuesto sin cargo y la mayor responsabiliad y compromiso.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img  class="img-responsive" src="vistas/img/obrerodibujo.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pisos Flotantes</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Pisos de Madera</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Decks</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Reparacion y Mantenimiento</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">SERVICIO DE REPARACION URGENCIAS LAS, <span>24.HS</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms"> <br /></p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">CONTACTO</a></p>
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros Servicios</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="features-item">
                            <div class="features-icon">
                                
                            </div>
                            <h3 class="features-title font-alt">Pisos</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="features-item">
                            <div class="features-icon">
                               
                            </div>
                            <h3 class="features-title font-alt">Techos</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="features-item">
                            <div class="features-icon">
                              
                            </div>
                            <h3 class="features-title font-alt">Paredes</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="features-item">
                            <div class="features-icon">
                              
                            </div>
                            <h3 class="features-title font-alt">Refrigeracion</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="features-item">
                            <div class="features-icon">
                               
                            </div>
                            <h3 class="features-title font-alt">Herreria</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="features-item">
                            <div class="features-icon">
                               
                            </div>
                            <h3 class="features-title font-alt">Urgencias</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                        <div class="features-item">
                            <div class="features-icon">
                                
                            </div>
                            <h3 class="features-title font-alt">Electricidad</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                        <div class="features-item">
                            <div class="features-icon">
                               
                            </div>
                            <h3 class="features-title font-alt">Plomeria</h3>
                            Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                        </div>
                    </div>

                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown dark">Algunos trabajos</h2>
                <p class="text-center wow fadeInDown"> <br> </p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Trabajos realizados</a></li>
                    <li><a href="#" data-filter=".animation">Techos</a></li>
                    <li><a href="#" data-filter=".Business">Pisos</a></li>
                    <li><a href="#" data-filter=".art">Refrigeracion</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/pisos.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            <a class="preview" href="images/portfolio/pisos.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                <div class="portfolio-item Business art">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/pisos1.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            <a class="preview" href="images/portfolio/pisos1.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/techos.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            <a class="preview" href="images/portfolio/techos.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/techos1.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            <a class="preview" href="images/portfolio/techos1.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation art">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/refri.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="images/portfolio/refri.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img style="height:250px" class="img-responsive" src="images/portfolio/refri1.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="images/portfolio/refri1.jpg" rel="prettyPhoto">
                                <img src="images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <!--/.portfolio-item-->

         <!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->







    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                            <a href="https://www.instagram.com.ar"> <p><img  style="height: 120px;" class="img-circle img-thumbnail" src="images/testimonial/inst.png" alt=""></p></a>
                                <h4>SEGUINOS EN INSTAGRAM</h4>
                                <small></small>
                                <p></p>
                            </div>
                            <div class="item">
                                <a href="https://www.facebook.com.ar"> <p><img style="height: 120px;" class="img-circle img-thumbnail" src="images/testimonial/transparent.png" alt=""></p></a>
                                <h4>BUSCANOS EN FACEBOOK</h4>
                                <small></small>
                                <p></p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->





    <section id="contact-area">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Envianos tu Consulta</h2>
                    <p class="text-center wow fadeInDown animated" style="visibility: visible;">Un representante se pondra en contacto a la brevedad.</p>
                </div>
                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                        <div class="form-group">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Nombre" required>
                            </div>
                        <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Telefono </label>
                                <input type="text"  name="email" class="form-control" placeholder="Telefono" required>
                            </div>

                    </div>
                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Su mensaje aqui..." required></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">

                          <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Enviar Mensaje</button>

                    </div>

                </form>

            </div>
        </div>
                
    </section><!--/#bottom-->
    <a  href="#home" class="subir" > <i class="fas fa-arrow-up "></i></a>
    <a  href="https://wa.me/5491125320354?text=Hola!%20Estoy%20interesado%20en%20hacer%20una%20web!" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                        Buscanos en redes sociales 
                    </p>
                    
                    <ul class="social-icons text-center">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
       
    </footer><!--/#footer-->
    <?php  
include   "./vistas/includes/script.php"; 

?>
	
   
</body>
</html>