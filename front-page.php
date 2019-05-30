<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

get_header();
?>

<main>

	<section class="our-services">

		<div class="container">
			<hgroup>
				<h3>Qué podemos ofrecer</h3>
				<h2>Nuestros servicios Premium más destacados</h2>
			</hgroup>
			<div id="carousel-services" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner card-deck row w-100 mx-auto" role="listbox">
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1026/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img1">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 1</h5>
								<p class="card-text">This is a longer card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
					
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/103/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/2.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img2">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 2</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to
									additional content.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
					
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/services/3.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img3">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 3</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/4.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img4">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 4</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/5.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img5">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 5</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/6.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img6">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 6</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/7.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img7">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 7</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
					
						<div class="card">
							<a href="./servicio.html">
								<!--img src="https://picsum.photos/id/1051/360/220" class="card-img-top img-fluid mx-auto d-block" alt="..."-->
								<img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/8.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img8">
							</a>
							
							<img class="card--icon" src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.svg'; ?>" class="card-img-top img-fluid mx-auto d-block" alt="ico1">
							<div class="card-body">            
								<h5 class="card-title">Servicio 8</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This card has even longer content than the first to
									show that equal height action.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel-services" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carousel-services" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>

	</section><!-- .our-services -->

	<div class="container">
		<div class="main-content">
			<section class="us">

				<div class="row">
					<div class="col-12 col-md-6">

						<section class="us__choose-us">
							<hgroup>
								<h3>Por que elegirnos</h3>
								<h2>Cómo trabajamos</h2>
							</hgroup>
							<div class="tabs">
								<div class="tab">
									<input type="radio" id="rd0" name="rd">
									<label for="rd0" class="tab-close">Cerrar &times;</label>
								</div>
								<div class="tab">
									<input type="radio" id="rd1" name="rd">
									<label class="tab-label" for="rd1"><i class="fas fa-check"></i>Item 1</label>
									<div class="tab-content">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
									</div>
								</div>
								<div class="tab">
									<input type="radio" id="rd2" name="rd">
									<label class="tab-label" for="rd2"><i class="fas fa-check"></i>Item 2</label>
									<div class="tab-content">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
									</div>
								</div>
								<div class="tab">
									<input type="radio" id="rd3" name="rd">
									<label class="tab-label" for="rd3"><i class="fas fa-check"></i>Item 3</label>
									<div class="tab-content">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
									</div>
								</div>
								<div class="tab">
									<input type="radio" id="rd4" name="rd">
									<label class="tab-label" for="rd4"><i class="fas fa-check"></i>Item 4</label>
									<div class="tab-content">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
									</div>
								</div>
								<div class="tab">
									<input type="radio" id="rd5" name="rd">
									<label class="tab-label" for="rd5"><i class="fas fa-check"></i>Item 5</label>
									<div class="tab-content">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
									</div>
								</div>
							</div>
							
						</section>

					</div>
					<div class="col-12 col-md-6">

						<section class="us__we-do-it">
							<hgroup>
								<h3>Cotice ahora</h3>
								<h2>Cuentenos que desea y trabajemos juntos</h2>
							</hgroup>
							<img class="img-fluid" src="<?php echo get_template_directory_uri() . '/dist/assets/images/roof.jpg'; ?>" alt="Lo hacemos por UD">    
						</section>  

					</div>
				</div>

				<div class="row justify-content-center align-content-center">
					<div class="col-12 col-md-8 col-lg-10">

						<section class="us__call-us">
							
							<div class="row justify-content-between align-items-center">
								<div class="col-12 col-md-6">
									<hgroup>
										<h3>Llamenos a</h3>
										<h2>0180009876231</h2>
									</hgroup>
								</div>
								<div class="col-12 col-md-6">
									<a class="nav-link my-2 my-sm-0 btn btn-primary btn__action" href="#">Cotice ahora!</a>
								</div>
							</div>
						</section>

					</div>
				</div>

			</section>
		</div>
		<!--aside class="sidebar">
			<h3>Barra lateral</h3>
		</aside-->
	</div>

</main>

<?php
get_footer();
