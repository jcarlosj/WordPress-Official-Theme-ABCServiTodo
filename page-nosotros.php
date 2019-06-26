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

			<?php # Seccion business-mission
				$title 	  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_mision_title' );
				$subtitle = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_mision_subtitle' );
				$image    = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_mision_image' );
				$content  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_mision_wysiwyg' );

				if( $title[ 'exists' ] || $subtitle[ 'exists' ] || $image[ 'exists' ] || $content[ 'exists' ] ) :
			?>
		
				<section class="business-mission">
					<div class="container">

						<div class="row">
							<div class="col-12 col-md-6 content">
								<?php if( $title[ 'exists' ] || $subtitle[ 'exists' ] ) : ?>
									<hgroup>
										<h3><?php echo $subtitle[ 'value' ] ?></h3>
										<h2><?php echo $title[ 'value' ]; ?></h2>
									</hgroup>
								<?php
									endif;
									if( $content[ 'exists' ] ) :
										echo $content[ 'value' ];
									endif; 
								?>	
							</div>
							<?php if( $image[ 'exists' ] ) : ?>
								<div class="col-12 col-md-6 image">
									<?php
										$id_image = get_post_meta( get_the_ID(), 'page_nosotros_mision_image_id', true );   # Obtiene el ID de la imagen.
										$tag_image = wp_get_attachment_image( $id_image, 'section-page-us' );            		# Obtiene el URL, asigna tamaño.
										echo $tag_image;
									?>
								</div>
							<?php endif; ?>
						</div>

					</div>  
				</section>

			<?php endif; ?>	

			<?php # Seccion business-mission
				$title 	  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_vision_title' );
				$subtitle = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_vision_subtitle' );
				$image    = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_vision_image' );
				$content  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_vision_wysiwyg' );

				if( $title[ 'exists' ] || $subtitle[ 'exists' ] || $image[ 'exists' ] || $content[ 'exists' ] ) :
			?>

				<section class="business-vision">
					<div class="container">

						<div class="row">
							<div class="col-12 col-md-6 content">
								<?php if( $title[ 'exists' ] || $subtitle[ 'exists' ] ) : ?>
									<hgroup>
										<h3><?php echo $subtitle[ 'value' ] ?></h3>
										<h2><?php echo $title[ 'value' ]; ?></h2>
									</hgroup>
								<?php
									endif;
									if( $content[ 'exists' ] ) :
										echo $content[ 'value' ];
									endif; 
								?>	
							</div>
							<?php if( $image[ 'exists' ] ) : ?>
								<div class="col-12 col-md-6 image">
									<?php
										$id_image = get_post_meta( get_the_ID(), 'page_nosotros_vision_image_id', true );   # Obtiene el ID de la imagen.
										$tag_image = wp_get_attachment_image( $id_image, 'section-page-us' );            		# Obtiene el URL, asigna tamaño.
										echo $tag_image;
									?>
								</div>
							<?php endif; ?>
						</div>

					</div>  
				</section>
			
			<?php endif; ?>					

			<?php # Seccion business-mission
				$title 	  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_objectives_title' );
				$subtitle = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_objectives_subtitle' );
				$image    = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_objectives_image' );
				$content  = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_nosotros_objectives_wysiwyg' );

				if( $title[ 'exists' ] || $subtitle[ 'exists' ] || $image[ 'exists' ] || $content[ 'exists' ] ) :
			?>

				<section class="business-goals">	
					<div class="container">

						<div class="row">
							<div class="col-12 col-md-6 content">
								<?php if( $title[ 'exists' ] || $subtitle[ 'exists' ] ) : ?>
									<hgroup>
										<h3><?php echo $subtitle[ 'value' ] ?></h3>
										<h2><?php echo $title[ 'value' ]; ?></h2>
									</hgroup>
								<?php
									endif;
									if( $content[ 'exists' ] ) :
										echo $content[ 'value' ];
									endif; 
								?>	
							</div>
							<?php if( $image[ 'exists' ] ) : ?>
								<div class="col-12 col-md-6 image">
									<?php
										$id_image = get_post_meta( get_the_ID(), 'page_nosotros_objectives_image_id', true );   # Obtiene el ID de la imagen.
										$tag_image = wp_get_attachment_image( $id_image, 'section-page-us' );            		# Obtiene el URL, asigna tamaño.
										echo $tag_image;
									?>
								</div>
							<?php endif; ?>
						</div>

					</div>

				</section>

			<?php endif; ?>

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
