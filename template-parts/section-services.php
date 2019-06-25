<?php
/**
 * Template part for displaying section services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<?php 
    $page = get_page_by_path( 'servicios' );
?>
<hgroup>
    <?php 
        $page_title = get_post_meta( get_the_ID(), 'page_subtitle', true );

        if( ! empty( $page_title ) ) :
    ?>
        <h3><?php echo $page_title; ?></h3>
    <?php endif; ?>

    <h2><?php echo get_the_title( $page ); ?></h2>
</hgroup>

<div id="carousel-services" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner card-deck row w-100 mx-auto" role="listbox">
        <?php
            $loop = 0;
            $args = array(
                'post_parent'    => $page -> ID,   // ID of your parent page
                'post_type' => 'page',
                'posts_per_page' => -1,
                'order'          => 'ASC',
                'orderby'        => 'menu_order',
            );
            
            // Custom query.
            $query = new WP_Query( $args );

            // Check that we have query results.
            if ( $query -> have_posts() ) :
                
                // Start looping over the query results.
                while ( $query -> have_posts() ) :
                    $query -> the_post();
        ?>

            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 <?php echo ( $loop == 0 ) ? 'active' : ''; ?>">
            
                <div class="card">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( null, 'slider-us' ); ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="<?php the_title(); ?>" >
                        <?php if( get_post_meta( get_the_ID(), 'page_icon', true ) != null ) :?>
                            <img class="card--icon" src="<?php echo get_post_meta( get_the_ID(), 'page_icon', true ); ?>" class="card-img-top img-fluid mx-auto d-block" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body">            
                            <h5 class="card-title"><?php the_title(); ?></h5>
                        </div>
                    </a>
                </div>
            </div>

        <?php 
                    $loop++;
                endwhile;
            endif;
                
            // Restore original post data.
            wp_reset_postdata();
        ?> 

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