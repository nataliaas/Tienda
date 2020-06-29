<?php
session_start();
if (!isset($_SESSION["username"])){
    
}?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assetskoszyk/css/mainkoszyk.css" />
		<noscript><link rel="stylesheet" href="assetskoszyk/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper" >

			<!-- Header -->
				<header id="header">
                <img src="img/profile2.png" style="height: 69px; padding-left: 2.5rem" class="img-responsive" alt="">
                <nav id="nav">
						<ul>
							<li><a href="main.php">Inicio</a></li>
							<li>
								<a href="Produkty.php">Volver a tienda</a></li>
								<li><a href="logout.php">Cerrar Sesion</a></li>
								</ul>
							</li>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1" style="background-image: url('/Sklep/img/tlokoszyk.jpg'); height: 100%; background-position: center;background-repeat: no-repeat;
				background-size: cover;">
					<div class="container">
						<header class="major">
							<h2>Carrito</h2>
							<p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
						</header>
						<!-- Table -->
							<section>
								<h4>Tus productos</h4>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th class="product-name" >Cantidad</th>
												<th class="product-quantity">Producto</th>
												<th class="product-price">Price</th>
												
												<th class="product-remove">&nbsp;</th>
											</tr>
										</thead>
										<tbody><?php
      $num=0;
      $total=0;
      foreach($_SESSION['carrito'] as $key => $producto){
        $num++;
        $total=$total+$producto['precio'];
		?>
			<tr>
			<td><?=$num?></th>
			<td><?=$producto['producto']?></td>
			<td><?=$producto['precio']?></td>
			<td><a href="borrar.php?key=<?=$key?>" class="btn btn-primary">X</button></td>
			</tr>
			<?php
		    }
			?>
			<th class="product-subtotal">Total</th>
			<td class="total" style="padding-left: 40rem;" ><?= $total ?>€ <small class="tax_label">(con IVA)</small></td>
	    </tbody>
		</table>
								
						<!-- Buttons -->
							<section>
								<ul class="actions">
									<li><a href="#" class="button primary">Comprar</a></li>
									<li><a href="#" class="button">Borrar</a></li>
								</ul>
								
						<!-- Form -->
							<section>
								<h3>¿Tienes preguntas?</h3>
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" id="name" value="" placeholder="Nombre" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<select name="category" id="categoría">
												<option value="">- Categoría -</option>
												<option value="1">Fabricación</option>
												<option value="1">Envío</option>
												<option value="1">Administración</option>
												<option value="1">Recursos humanos</option>
											</select>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Baja prioridad</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Prioridad normal</label>
										</div>
										<div class="col-4 col-12-medium">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high"> Alta prioridad</label>
										</div>
										<div class="col-6 col-12-medium">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Envíame una copia de este mensaje por correo electrónico</label>
										</div>
										<div class="col-6 col-12-medium">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">Soy humano y no robot</label>
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Ingrese su mensaje" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Enviar mensaje" class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

						

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assetskoszyk/js/jquery.min.js"></script>
			<script src="assetskoszyk/js/jquery.scrolly.min.js"></script>
			<script src="assetskoszyk/js/jquery.dropotron.min.js"></script>
			<script src="assetskoszyk/js/jquery.scrollex.min.js"></script>
			<script src="assetskoszyk/js/browser.min.js"></script>
			<script src="assetskoszyk/js/breakpoints.min.js"></script>
			<script src="assetskoszyk/js/util.js"></script>
			<script src="assetskoszyk/js/main.js"></script>

	</body>
</html>