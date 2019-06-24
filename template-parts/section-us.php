<?php
/**
 * Template part for displaying section us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

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
                        <?php 
                            $loop = 0;
                            $entries = get_post_meta( get_the_ID(), 'front_page_group', true ); 
                        
                            if( $entries ) :
                                // var_dump( $entries ); exit;
                                
                                foreach ( (array) $entries as $key => $entry ) :
                                    $loop++;
                        ?>
                                    <div class="tab">
                                        <input type="radio" id="rd<?php echo $loop; ?>" name="rd">
                                        <label class="tab-label" for="rd<?php echo $loop; ?>">
                                            <i class="fas fa-check"></i>
                                            <?php 
                                                if ( isset( $entry[ 'question' ] ) ) : 
                                                    echo $entry[ 'question' ];
                                                endif;    
                                            ?>
                                        </label>
                                        <div class="tab-content">
                                            <?php 
                                                if ( isset( $entry[ 'answer' ] ) ) : 
                                                    echo $entry[ 'answer' ];
                                                endif;    
                                            ?>
                                        </div>
                                    </div>
                        <?php            
                                endforeach;
                            endif;                            
                        ?>
                        
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