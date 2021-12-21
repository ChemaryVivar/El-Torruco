<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Casa rural El Torruco - Contacta con nosotros</title>
  <meta name="description" content="">
  <meta name="description" content="Contacto y precios de la casa rural de alquiler completo en Santa Cruz del Valle urbión.">
  <meta name="keywords" content="Burgos, Casa rural, Santa Cruz del Valle Urbión, Sierra de la demanda, España">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="img/icono.png">


  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="css/estilos.css">
    <style>


/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
    
    </style>
  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!--      HEADER -------------    -->
      
   <header class="header-habitaciones">
     <div class="hero">
       
       <div class="barra">
            <div class="contenedor clearfix">
                
                <div class="logo">
                   <a href="index.html">
                    <img src="img/logo_torruco.png" alt="logo">
                    </a>
                </div>
                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="navegacion-principal clearfix">
                    <a href="index.html">Inicio</a>
                    <a href="nuestra_casa.html" class="inicial">Nuestra casa</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="precios.html">Precios</a>
                    <a href="entorno.html">Entorno</a>
                </nav>
            </div>
        
    </div><!-- Fin barra con menu -->
       
   
               
         
        </div><!-- Fin del contenedor hero -->
        
        
    </header>

    
       
    <!-- sección habitaciones-->
  
    <section class="seccion contenedor">
        <h1>Dónde estamos</h1>
        <p>Nos encontramos en Santa Cruz del Valle Urbión, en plena Sierra de la Demanda.</p>
    </section>
    
       
       
       
        <section class="datos">
                
            <div>
                
                <div class="container">  
				<?php
					if(!isset($_GET['formulario']))
					{
						
					
				?>
				
  <form id="contact" action="contacto_datos.php" method="post">
    <h3>Contacta con nosotros</h3>
    <h4>Escríbenos y te contestaremos en menos de 24 horas!</h4>
    <fieldset>
      <input placeholder="Tu nombre" type="text" tabindex="1" required name="nombre" id="nombre">
    </fieldset>
    <fieldset>
      <input placeholder="Tu email" type="email" tabindex="2" required
      id="email" name="email">
    </fieldset>
    <fieldset>
      <input placeholder="Tu teléfono" type="tel" tabindex="3" id="telefono" name="telefono" >
    </fieldset>
   
    <fieldset>
      <textarea placeholder="Escribe tu mensaje aquí...." tabindex="4" required id="mensaje" name="mensaje"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
    </fieldset>
  </form>
 			<?php
				}
					elseif ($_GET['formulario'] == "enviado")
					{
						echo "<h3>El formulario se ha enviado con exito</h3>";
                        echo "<p>Muchas gracias por contactar con nosotros. Nos pondremos en contacto contigo en cuando podamos.</p>";
					}
  			?>
</div>
                
                
            </div>
            <div class="derecha">
               <figure style="text-align: center;padding: 1rem;"> <img src="img/logo_torruco.png" alt="logo" style="width: 80%;">
                </figure>
                <p>Consulta la disponibilidad de la casa.</p>
                <p>Contáctanos por teléfono o rellena el formulario y nos pondremos en contacto contigo lo antes posible.</p>
            <p><b>Dirección y datos:</b><br> C/Mayor 21, 09268 - Santa Cruz del Valle Urbión</p>
            <p><b>Email: </b> <br>beaboudiez@gmail.com </p>
            <p><b>Teléfono: </b><br>(+34) 600 208 251</p>
            </div>


        </section>
    
    <!-- Para el mapa -->
    
      <section class="mapa">
            
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11803.083030227379!2d-3.2230461!3d42.3047567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x309ec7bf965ed04f!2sCasa%20rural%20torruco!5e0!3m2!1ses!2ses!4v1635927312050!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
   
   

   





          
      

<footer></footer>
<div class="barra_baja">
            <div class="contenedor clearfix">
                
            <nav class="redes-sociales">
                    <a href="https://www.facebook.com/Casa-Rural-El-Torruco-105557718550425/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/casaruraleltorruco/"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        
    </div><!-- Fin barra baja con menu de redes sociales -->

<!--   -->    
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
   

</body>

</html>
