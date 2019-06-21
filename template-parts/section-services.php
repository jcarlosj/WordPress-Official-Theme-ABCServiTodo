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
    <h3>Qué podemos ofrecer</h3>
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


<!--div id="carousel-services" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner card-deck row w-100 mx-auto" role="listbox">
        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
        
            <div class="card">
                <a href="./servicio.html">
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
                    <img src="<?php echo get_template_directory_uri() .'/dist/assets/images/services/3.jpg'; ?>" class="card--image card-img-top img-fluid mx-auto d-block" alt="img3">
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
</div-->