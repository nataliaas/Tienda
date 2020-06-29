<?php
session_start();
if (!isset($_SESSION["username"])){
    header('location:login.php'); 
}?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assetsprodukty/css/main.css" />
		<noscript><link rel="stylesheet" href="assetsprodukty/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>HERRAMIENTAS <br />
							Y ACCESORIOS</h1>
						<p>¡Equipo totalmente profesional y sólido que necesitas para crear el jardín de tus sueños!</p>
						<ul class="actions">
							<li><a href="#header" class="añadir a carrito icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="main.php" class="logo">Inicio</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="">Los Productos</a></li>
							<li><a href="verCarrito.php">Carrito</a></li>
							
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

                <!-- Main -->
                <form action="agregar.php" method="get">
					<div id="main">
						<?php 
						$item[0] = 30;
						$item[1] = 29.99;
						$item[2] = 50;
						$item[3] = 48.99;
						$item[4] = 15;
						$item[5] = 2;
						$item[6] = 100;
						
					?>
					<?php
          if (isset($_GET['m'])){
              switch($_GET['m']){
                  case 1:?>
                  <div class="alert alert-danger" role="alert">
                      Welcome mr. <?=$_SESSION["username"]?>
                  </div> <?php
                  break;
                  case 2:
                  ?>
                  <div class="alert alert-success" role="success">
                      Ha añadido un producto al carrito
                  </div> 
                  <?php
                  break;
              }
          }?>
                    <!-- Carousel -->
<!--Carousel Wrapper
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls

  <!--Indicators
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators

  <!--Slides
  <div class="carousel-inner" role="listbox">

    <!--First slide
    <div class="carousel-item active">

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw1.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw2.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide

    <!--Second slide
    <div class="carousel-item">

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw3.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw4.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw5.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide

    <!--Third slide
    <div class="carousel-item">

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw6.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw7.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>
	  
      <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top"
            src="../Sklep/imagesprodukty/zestaw8.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">añadir a carrito</a>
          </div>
        </div>
      </div>
	  
    </div>
    <!--/.Third slide

  </div>
  <!--/.Slides

</div>
<!--/.Carousel Wrapper-->
						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									
									<h2>Nuestras promociones!</h2>
									<p>HERRAMIENTAS DE JARDINERÍA CONJUNTO 6X <br />
										<div class="row" style="width: 60%; margin: 0 auto 0 auto;">
										<div class="col-6 col-12-medium" style="width: 50%; margin: 0 AUTO;">
											<h5>COMPOSICIÓN DEL SET:</h5>
											<ol>
												<li>Espada</li>
												<li>Garras de jardín</li>
												<li>Pikownik</li>
												<li>Tenedor</li>
												<li>Azada rectangular</li>
												<li>Rastrillos con un cepillo</li>
											</ol>
									</p>
								</div>
							</div>
							
								</header>
								<a href="#" class="image main"><img src="imagesprodukty/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="agregar.php?producto=Herramientas de Jardineria Conjinto 6X &precio=100" class="btn btn-primary">Agregar</button></a></li>
								</ul>
								<h2>100€!<input type="hidden" name="comanda[item[6]]" min="0" max="5" value="0" class="mx-auto d-block"><input type="hidden" name="precio[item[6]]" value=<?=$item[6]?>></h2>
							</article>

						<!-- Posts -->
							<section class="posts">
								<article>
									<header>
										
										<h2><a href="#">CORTINAS DE HIERBA<br />
											GIRATORIAS </a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic02.jpg" alt="" /></a>
									<p>30€
									<input type="hidden" name="precio[item[0]]" value=<?=$item[0]?>></p>
									<ul class="actions special">
										<li><a href="agregar.php?producto=CORTINAS DE HIERBA GIRATORIAS &precio=30" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
								<article>
									<header>
										
										<h2><a href="#">Podadora de jardín</a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic03.jpg" alt="" /></a>
									<p>29.99€
										<input type="hidden" name="precio[item[1]]" value=<?=$item[1]?>></p>
									<ul class="actions special">
										<li><a href="agregar.php?producto=Podadora de jardín&precio=29.99" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
								<article>
									<header>
										
										<h2><a href="#">Cortadora de césped<br />sin cuerda</a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic04.jpg" alt="" /></a>
									<p>50€<input type="hidden" name="precio[item[2]]" value=<?=$item[2]?>></p>
									<ul class="actions special">
										<li><a href="agregar.php?producto=Cortadora de césped sin cuerda &precio=50" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
								<article>
									<header>
										
										<h2><a href="#">CIZALLAS DE HIERBA CORTA <br />
											BATERÍA NAC TA36-JN</a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic05.jpg" alt="" /></a>
									<p>48.99€
										<input type="hidden" name="precio[item[3]]" value=<?=$item[3]?>></p>
									<ul class="actions special">
										<li><a href="agregar.php?producto=CIZALLAS DE HIERBA CORTA BATERÍA NAC TA36-JN&precio=100" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
								<article>
									<header>
									
										<h2><a href="#">CEPILLO PLEGABLE AIREADO <br />
											50CM</a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic06.jpg" alt="" /></a>
									<p>15€
										<input type="hidden" name="precio[item[4]]" value=<?=$item[4]?>></p>
									<ul class="actions special">
										<li><input type="hidden" name="precio[item[4]]" min="0" max="6" value="0" class="mx-auto d-block">
                   						<input type="hidden" name="precio[item[4]]" value=<?=$item[4]?> ><a href="agregar.php?producto=CEPILLO PLEGABLE AIREADO 50CM &precio=15" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
								<article>
									<header>
										
										<h2><a href="#">GUANTES PROTECTORES</a></h2>
									</header>
									<a href="#" class="image fit"><img src="imagesprodukty/pic07.jpg" alt="" /></a>
									<p>2€<input type="hidden" name="precio[item[5]]" value=<?=$item[5]?>></p>
									<ul class="actions special">
										<li><a href="agregar.php?producto=GUANTES PROTECTORES &precio=2" class="btn btn-primary">Agregar</button></a></li>
									</ul>
								</article>
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>
					</form>
				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>Somewhere road 182<br />
								Graidsnone, 00000-00</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assetsprodukty/js/jquery.min.js"></script>
			<script src="assetsprodukty/js/jquery.scrollex.min.js"></script>
			<script src="assetsprodukty/js/jquery.scrolly.min.js"></script>
			<script src="assetsprodukty/js/browser.min.js"></script>
			<script src="assetsprodukty/js/breakpoints.min.js"></script>
			<script src="assetsprodukty/js/util.js"></script>
			<script src="assetsprodukty/js/main.js"></script>

	</body>
</html>