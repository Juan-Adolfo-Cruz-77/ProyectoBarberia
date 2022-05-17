<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Barber_shop</title>
        <meta name="author" content="iThemesLab">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/estilos.css" />

        <link href="css/style.css" rel="stylesheet">

        <link rel="shortcut icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cPlayfair+Display:400,700" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/settings.css">
        <link rel="stylesheet" href="assets/css/vendor/rev_slider/navigation.css">
  
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  
        <link rel="stylesheet" href="assets/css/vendor/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/vendor/owl.theme.css">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap-datepicker.standalone.css">
  
        <link rel="stylesheet" href="assets/css/style.css">
 
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body bgcolor="black">
        
        <div class="header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index-2.html">
                                        <img src="img/logo.png" width="80" alt="">
                                    </a>
                                </div> 

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="top-right-contact text-right pull-right hidden-sm hidden-xs">
                                        <i class="fa fa-phone-square"></i> (+503) 60785060
                                    </div> <!--top-right-contact-->
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#">Inicio</a></li>
                                        <li><a href="#quienes">Acerca de</a></li>
                                        <li><a href="#portafolio">Servicios</a></li>
                                        <li><a href="#">Reservas</a></li>
                                        <li><a href="#container">Contacto</a></li>
                                        <li><a href="index.php"><font color="red">SALIR</font></a></li>
                                    </ul>
                                    
                                </div>
                            </div> 
                        </nav>

                    </div> 
                    
                </div>
            </div> 
        </div>


         

        <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography1" style="background-color:transparent;padding:0px;">
            <div id="rev_slider_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                <ul>
                    
                    <li data-index="rs-3" data-transition="slideoververtical">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/slideshow/slide-3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                </ul>
            </div>
        </div> 
        
         


        <!-- footer start -->
        <div class="footer bg-color-2 pad80 text-center">
            <div class="container">
              
                    <div class="col-md-12">
                        <div class="footer-logo">
                        </div>
                    </div>
                </div>

<section id="quienes">
          <h3 class="section-title">¿Quienes Somos?</h3>
<p><img src="img/logo.png" align="left">

<h3>Nuestra Historia:</h3>
Nombre de la BARBERIA es una empresa FAMILIAR 100% SALVADOREÑA, establecida en diciembre 2015.  Nacida de un sueño, nuestra barbería está fundamentada en la PASIÓN por el oficio y en el deseo de aportar a los hombres que entran por nuestra puerta una experiencia gratificante al ofrecerle los servicios de la barbería clásica, pero siempre aportando ideas frescas y modernas, en un ambiente de amistad, alegría y respeto.
Nuestro equipo es AUTÉNTICO, como nos ves es como somos. Estamos ampliamente calificados y enfocados en la satisfacción del cliente ya sea en el corte de cabello, el arreglo de la barba o el afeitado clásico, siempre teniendo presente el trato intachable al cliente.

<h3>MISIÓN:</h3>
HACERTE DISFRUTAR MIENTRAS CUIDAS TU IMAGEN
Brindar un servicio de alta calidad que satisfaga las necesidades y exigencias de cada cliente.   Contar con un personal profesional, calificado y responsable para que nuestra clientela experimente la sensación de estar en un ambiente familiar y desee regresar a nuestra Barberia.

<h3>VISIÓN:</h3>
CUIDAR DE TI Y DE TU IMAGEN ES LA MEJOR MANERA DE INVERTIR TU TIEMPO
Ser la Barberia número #1 de El Salvador comprometiéndonos con nuestros clientes y ofrecer servicios con los mejores estándares de calidad donde superemos cualquier expectativa innovando día a día para su máxima satisfacción.

<h3>VALORES:</h3>
SOMOS DE LA NUEVA ESCUELA, NOS ENFOCAMOS EN TI
Cuidar tu imagen es algo muy personal y que no se puede dejar a un cualquiera. Queremos ser tu estilista, tu asesor y, si nos dejas, tu colega. Queremos ser algo para ti. Un trato personal y cercano donde lo más importante seas tú.


</p>



</section>

  <br><br><br>



  <section id="portafolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Servicios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Descripción Del Servicios</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta1.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta2.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta3.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta4.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta5.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta6.jpg);">
            <div class="details">
              <h4>Descripción</h4>
             <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta7.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>
       <div class="col-md-3">
          <a class="portafolio-item" style="background-image: url(img/porta8.jpg);">
            <div class="details">
              <h4>Descripción</h4>
              <span>Precio: $3.00</span>
            </div>
          </a>
        </div>

      

      </div>
    </div>
  </section>
  <br><br><br>
               
        <!-- jquery latest version -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap latest version -->
        
        <!-- revolution slider js files start -->
        <script src="assets/js/vendor/rev_slider/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/vendor/rev_slider/jquery.themepunch.revolution.min.js"></script>
        
       
		<!--Appear js file-->
        <script src="assets/js/vendor/jquery.appear.js"></script>
        <!--CountTo js file-->
        <script src="assets/js/vendor/jquery.countTo.js"></script>
		<!--Owl Carousel js file-->
        <script src="assets/js/vendor/owl.carousel.min.js"></script>
        <!-- template main js file -->
        <script src="assets/js/main.js"></script>
        <!-- all js include end -->
    </body>

<section id="container">
    <div class="container">
        <h1 class="text-left" style="color: #f3f3f3">Contactanos</h1>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="enviarcorreo.php">
                    <ul class="contact-form">
                        <li>
                            <div class="col-md-6">
                                <input name="nombre" placeholder="Escribe tu nombre" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="email" placeholder="Email" required="required" size="8" type="email" />
                            </div>
                        </li>

                        <li>
                            <div class="col-md-6">
                                <input name="telefono" placeholder="Escribe tu numero" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="compañia" placeholder="Companía/Agencia" required="required" size="8" type="text" />
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <input name="asunto" placeholder="Asunto" required="required" size="8" type="text" />
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <textarea class="span12" name="mensaje" placeholder="Escribe tu proyecto o mensaje" required="required"></textarea>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-12">
                                <button type="submit">
                    Enviar mensaje
                    <span
                      class="glyphicon glyphicon-arrow-right"
                      aria-hidden="true"
                    ></span>
                  </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>



    


	  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>BARBER SHOP</strong>. Todos Los Derechos Recervados
          </div>
          <br>
                    <div class="col-md-5 col-sm-5">
                        <div class="footer-contact text-right">
                            <p> </p>
                            
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="footer-icon">
                            <div class="rotate-45deg"><i class="flaticon-scissors-opened-tool"></i></div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="footer-contact text-left">
                            <p></p>
                        </div>
                    </div>
                </div>
          <div class="credits">
               <div class="row">
                    <div class="col-md-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/brian.moreniito/videos/4288942384553428" target="_black"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://youtu.be/O5OkUxHVqW8" target="_black"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/p/CdUqtORNvyo/?utm_source=ig_web_copy_link" target="_black"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC87BrnQy7Y6iipGvQ6sAJfQ" target="_black"><i class="fa fa-google"></i></a></li>
                                <li><a href="https://co.pinterest.com/pin/667095763531064576/" target="_black"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
            <a >Integrantes: Cesar Eduardo Ruiz Garcia, Juan Adolfo Cruz Rosales, Sofia Alejandra Ramos Jimenez, Jonathan Joel Landaverde Arevalo, Erick Gustavo Santamaria Martinez, Rodrigo Stanley Ramirez Rivera</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<!-- #footer -->


  <!-- Required JavaScript Libraries -->
  



</html>