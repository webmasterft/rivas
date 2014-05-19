<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];

$header = 'From: ' . lumiled.consulta . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'lumiledecuador@gmail.com';
$asunto = 'mensaje desde la web lumiled';

mail($para, $asunto, utf8_decode($mensaje), $header);

//echo 'Mensaje enviado correctamente';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="luminarias,lumiled,luces,luz,led,ecuador">
    <meta name="author" content="Miguel Rivas,diseñador,digital,pagina,ux,web,sitios">

    <title>luminarias, led, luces :: Lumiled</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/style9.css" />
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <script src="js/modernizr.custom.js"></script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   <div class="garan">
    <img src="img/gara2.png">
  </div>
  
    <div class="navbar-wrapper">
      <div class="container arriba">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/lumiled-logo.png"></a>

            </div>
            <div class="slogan"><p>Representante exclusivo para el Ecuador de</p>
              </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="index.html">Inicio</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="lumiled-productos1.html">Residencial</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos2.html">Comercial</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos3.html">Carreteras</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos4.html">Túneles</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos5.html">Poste Solar</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos6.html">Reflectores</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos7.html">Decorativos</a></li>
                    <li class="divider"></li>
                    <li><a href="lumiled-productos8.html">Industrial</a></li>
                  </ul>
                </li>
                <li><a href="clientes.html">Clientes</a></li>
                <li class="active"><a href="contactos.html">Contactos</a></li>
               
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide slide-interno" data-ride="carousel">
      <!-- Indicators -->
      <img src="img/lumiled33.jpg" alt="lumiled">
    </div><!-- /.carousel -->

<div class="row sombraLumiled">
  <img src="img/sombraLumiled.png">
</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="row titulo sombraLumiled">
      <img src="img/lumiledTitulo12.png">
    </div>
<div class="cuerpo">
    <div class="container marketing">
    <div class="row">
        
        <div class="col-md-10 info intro" id="ctateta">
          <p>Lumiled pone a su disposición una variedad de canales de contacto a su servicio para su comodidad.</p>
          
          
        </div>
        </div>
       




<div class="row lelo">
  <div class="col-md-3" >
  <img src="img/fono.jpg">
  </div>
  <div class="col-md-3" >
  <img src="img/caleto.jpg">
  </div>
  <div class="col-md-3" >
  <img src="img/face.jpg">
  </div>
  <div class="col-md-3" >
  <img src="img/tw.jpg">
  </div>
</div>
<div class="row sepa" id="fofo">
        <img src="img/puntosLumiled.png">

      </div>
      <!-- Three columns of text below the carousel -->
      <div class="row">
    <div class="col-md-12 tttt">
         <h2>Formulario <strong>de Contacto</strong></h2>
          
        </div>
         <div class="col-lg-6 cont">
           <!--Formulario-->
<FORM id="contacto contact-form" name="contacto" class="ccll" action="enviar.php" method="POST">

<label class="comc"><p class="label lead">Nombre</p> <input class="campo nn" name="nombre" type="text" id="nombre"
 size="42"/></label>


<label class="comc"><p class="label lead">E-mail</p> <input class="campo ecm" name="mail" type="text" id="mail" size="43"/>
</label>

<label class="comc"><p class="label lead">Mensaje</p><br>
<textarea class="campo area" name="mensaje" cols="40" rows="8" id="mensaje">
</textarea></label>
<p><input class="btn-envio"id="envio" type="submit" name="Submit" value="Enviar"/></p>
</FORM> 
           </div>
           <div class="col-lg-5 bor">
           <iframe src="https://mapsengine.google.com/map/embed?mid=zkoTSqm94Tvs.kccNVv4bUFwY" width="640" height="480"></iframe>
           </div>
    
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      
      

     

      <div class="row sepa2">
        <img src="img/lineafooter.png">
      </div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer class="pie">
      <ul>
        <li><a href="index.html">INICIO</a></li>
        <li><a href="lumiled-productos.html">PRODUCTOS</a></li>
        <li><a href="clientes.html">CLIENTES</a></li>
        <li><a href="contactos.html">CONTACTOS</a></li>
        <li><img src="img/lumiled-footter.png"></li>
        <li>Siguenos:</li>
        <li class="red"><a href=""><img src="img/face-lumiled.png"></a></li>
        <li class="red"><a href=""><img src="img/twitter-lumiled.png"></a></li>
        <li><img src="img/lumiled-footter.png"></li>
        <li>&copy; 2014 LUMILED</li>
      </ul>
       
       
      </footer>
</div>
    </div><!-- /.container -->
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script>
      var hash = window.location.hash,
        current = 0,
        demos = Array.prototype.slice.call( document.querySelectorAll( '#codrops-demos > a' ) );
      
      if( hash === '' ) hash = '#set-1';
      setDemo( demos[ parseInt( hash.match(/#set-(\d+)/)[1] ) - 1 ] );

      demos.forEach( function( el, i ) {
        el.addEventListener( 'click', function() { setDemo( this ); } );
      } );

      function setDemo( el ) {
        var idx = demos.indexOf( el );
        if( current !== idx ) {
          var currentDemo = demos[ current ];
          currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
        }
        current = idx;
        el.className = 'current-demo'; 
      }
    </script>
  </body>
</html>
