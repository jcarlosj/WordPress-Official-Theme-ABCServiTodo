<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<div class="business--header">
	<div class="container">
		<div class="page-header">

			<hgroup class="page--title">
				<?php 
					$subtitle = abc_servitodo_cmb2_get_field_value( get_the_ID(), 'page_subtitle' );
					if( $subtitle[ 'exists' ] ) :
				?>

					<h3><?php echo $subtitle[ 'value' ]; ?></h3>

				<?php endif; ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</hgroup>

			<?php abc_servitodo_post_thumbnail(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'abc-servitodo' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
				
			</article><!-- #post-<?php the_ID(); ?> -->

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abc-servitodo' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
</div>
