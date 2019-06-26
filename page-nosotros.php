<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

get_header();
?>

<main id="main" class="site-main">
	<div class="page-us">	

		<section class="business">
				
			<?php 
				while ( have_posts() ) :
					the_post();
			
					get_template_part( 'template-parts/content-page', 'nosotros' );
			
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

			<section class="business-mission">
				<div class="container">

					<div class="row">
						<div class="col-12 col-md-6 content">
							<hgroup>
								<h3>Nuestra</h3>
								<h2>Misión</h2>
							</hgroup>
							<p>Pellentesque est nisi, commodo at felis non, condimentum sagittis eros. Vestibulum facilisis odio orci, eget venenatis orci imperdiet sit amet. In ornare molestie egestas. Nam aliquet sit amet sem nec efficitur. Pellentesque id tincidunt odio.</p>
							<p>Modi alias exercitationem, cupiditate corrupti, dolor vel eaque consequatur accusamus officiis similique distinctio, nostrum et! Nihil aliquam iure ipsa porro? Labore, consequatur!</p>
						</div>
						<div class="col-12 col-md-6 image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() .'/dist/assets/images/mision.jpg'; ?>" alt="Misión">
						</div>
					</div>

				</div>  
			</section>
			<section class="business-vision">

				<div class="container">
					<div class="row">                
						<div class="col-12 col-md-6 content">
							<hgroup>
								<h3>Nuestra</h3>
								<h2>Visión</h2>
							</hgroup>
							<p>Suspendisse at augue nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec posuere eros diam, eget vulputate orci suscipit a. Suspendisse maximus ullamcorper mi, ut varius ligula.</p>
							<p>Mauris luctus, nisi eleifend pharetra sagittis, est arcu pretium enim, eleifend pretium justo velit a lectus. Duis lacus leo, semper at viverra non, malesuada vel mauris. Cras accumsan, nisl ut luctus rhoncus, erat augue molestie nulla, vel bibendum nisl mauris vel mi. Morbi sit amet venenatis tortor. Curabitur sodales malesuada tellus, quis viverra nisi varius a. </p>
						</div>
						<div class="col-12 col-md-6 image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() .'/dist/assets/images/vision.jpg'; ?>" alt="Visión">
						</div>
					</div>
				</div>  

			</section>
			<section class="business-goals">
				
				<div class="container">
					<div class="row">                 
						<div class="col-12 col-md-6 content">
							<hgroup>
								<h3>Nuestros</h3>
								<h2>Objetivos</h2>
							</hgroup>
							<p>Curabitur in viverra lorem. Sed et felis risus. Donec semper at quam sit amet placerat. Praesent nisi libero, pellentesque at pellentesque ut, molestie convallis enim. Proin non imperdiet nibh. Morbi porttitor non tortor fringilla eleifend. Suspendisse potenti. Donec malesuada et ipsum in porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque ullamcorper arcu sed justo consectetur laoreet. Etiam non lectus id sapien commodo consequat.</p>
						</div>
						<div class="col-12 col-md-6 image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() .'/dist/assets/images/objetivos.jpg'; ?>" alt="Objetivos">
						</div>
					</div>
				</div>

			</section>

		</section><!-- .business -->

		<section class="our-services">
    
            <div class="container">
                <hgroup>
                    <h3>Trabajamos con los mejores</h3>
                    <h2>Nuestros proveedores destacados</h2>
                </hgroup>
                <div id="carousel-services" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner card-deck row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/1.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img1">    
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/2.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img2">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/3.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img3">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/4.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img4">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/5.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img5">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">    
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/6.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img6">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/7.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img7">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/8.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img8">
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

	</div><!-- .page-us -->
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
