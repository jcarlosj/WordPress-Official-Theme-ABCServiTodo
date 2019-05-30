<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ABC_ServiTodo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'abc-servitodo' ); ?></a>

		<header class="header">

			<section class="header__top">
				<div class="container">

					<div class="row justify-content-end align-items-center">
						<div class="col-12.col-md-8">

							<section class="menu-secondary d-none d-md-block">
								<nav class="btn-toolbar d-flex justify-content-end header__top" role="toolbar" aria-label="Toolbar with button groups"">
									<ul class=" btn-group nav menu-secondary text-uppercase" role="group" aria-label="First group">
										<li class="nav-item"><a class="btn btn-link nav-link" href="#">Tienda</a></li>
										<li class="nav-item"><a class="btn btn-link nav-link" href="#">Tarjeta</a></li>
										<li class="nav-item"><a class="btn btn-link nav-link" href="#">Pago</a></li>
									</ul>
								</nav>
							</section>

						</div>
						<div class="col-12.col-md-4">

							<section class="menu-social">
								<nav class="btn-toolbar d-flex justify-content-end header__top" role="toolbar" aria-label="Toolbar with button groups"">
									<ul class=" btn-group nav menu-social" role="group" aria-label="Second group">
										<li class="nav-item"><a class="btn btn-link nav-link" href="https://www.facebook.com"><span class="social--without-text">Facebook</span></span></a></li>
										<li class="nav-item"><a class="btn btn-link nav-link" href="https://www.twitter.com"><span class="social--without-text">Twitter</span></a></li>
										<li class="nav-item"><a class="btn btn-link nav-link" href="https://www.instagram.com"><span class="social--without-text">Instagram</span></a></li>
										<li class="nav-item"><a class="btn btn-link nav-link" href="https://www.pinterest.com"><span class="social--without-text">Pinterest</span></a></li>
									</ul>
								</nav>
							</section>

						</div> 
					</div>    
				</div>
			</section>

			<section class="header__middle">
				<div class="container">

					<div class="row justify-content-between align-items-center">
						<div class="col-12 col-md-4 d-flex justify-content-start">
							<a class="logo" href="<?php echo esc_url( home_url( './' ) ); ?>">
								<img class="img-fluid mx-auto" src="<?php echo get_template_directory_uri() . '/dist/assets/images/logo-abcservitodo.png'; ?>" alt="ABC ServiTodo">
							</a>    
						</div>
						<div class="col-12 col-md-8 d-none d-md-block">
							<ul class="info-group list-inline d-flex justify-content-end">
								<li class="info list-inline-item">
									<h3>Escribanos a</h3>
									<p>info@correo.co</a>
								</li>
								<li class="info list-inline-item">
									<h3>Llamenos a</h3>
									<p>0800.123.456789</a>
								</li>
								<li class="info list-inline-item">
									<h3>Horario</h3>
									<p>L - V | 09:00 - 19:00</p>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</section>

			<section class="header__bottom">
				<div class="container">

					<div class="row justify-content-center justify-content-md-start align-items-center">
						<div class="col-12">

							<nav class="navbar navbar-expand-md navbar-light navbar-md-dark">
								<a class="navbar-brand d-inline-block d-md-none" href="#">
									<div class="logo--small"></div>
									<!--img class="img-fluid mx-auto logo--inside-menu" src="./dist/assets/images/logo-abcservitodo.png" alt="ABC ServiTodo"-->
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-main" aria-controls="menu-main" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse menu-main" id="menu-main">
									<ul class="navbar-nav mr-auto text-uppercase">
										<li><a class="nav-link" href="#">Nosotros</a></li>
										<li><a class="nav-link" href="#">Blog</a></li>
										<li><a class="nav-link" href="#">Clases</a></li>
										<li><a class="nav-link" href="#">Galería</a></li>
										<li><a class="nav-link" href="#">Contacto</a></li>
										<li><a class="nav-link my-2 my-sm-0 btn btn-primary btn__action btn__inside--menu" href="#">Cotice ahora!</a></li>
									</ul>
									<span class="navbar-text">
										<a class="nav-link my-2 my-sm-0 btn btn-primary text-uppercase btn__action btn__outside--menu" href="#">Cotice ahora!!!</a>
									</span>
								</div>
							</nav>

						</div>
					</div>    

				</div>
			</section>
			
		</header>

		<div id="content" class="site-content">
