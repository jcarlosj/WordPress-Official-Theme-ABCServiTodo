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
                    <?php # Titulos de la sección
                        $headers = [
                            "title" => get_post_meta( get_the_ID(), 'front_page_title_1', true ),
                            "subtitle" => get_post_meta( get_the_ID(), 'front_page_subtitle_1', true )
                        ];

                        if( ! empty( $headers[ 'title' ] ) || ! empty( $headers[ 'subtitle' ] ) ) :
                    ?>
                            <hgroup>
                                <h3><?php echo $headers[ 'subtitle' ]; ?></h3>
                                <h2><?php echo $headers[ 'title' ]; ?></h2>
                            </hgroup>
                    <?php
                        endif;
                    ?>

                    <div class="tabs">
                        <?php 
                            $loop = 0;
                            $entries = get_post_meta( get_the_ID(), 'front_page_group', true ); 
                         
                            if( $entries ) :
                                // var_dump( $entries ); exit;
                        ?>
                                <div class="tab">
                                    <input type="radio" id="rd0" name="rd">
                                    <label for="rd0" class="tab-close">Cerrar &times;</label>
                                </div>
                        <?php       
                                
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
                    <?php # Titulos de la sección
                        $headers = [
                            "title" => get_post_meta( get_the_ID(), 'front_page_title_2', true ),
                            "subtitle" => get_post_meta( get_the_ID(), 'front_page_subtitle_2', true )
                        ];

                        if( ! empty( $headers[ 'title' ] ) || ! empty( $headers[ 'subtitle' ] ) ) :
                    ?>
                            <hgroup>
                                <h3><?php echo $headers[ 'subtitle' ]; ?></h3>
                                <h2><?php echo $headers[ 'title' ]; ?></h2>
                            </hgroup>
                    <?php
                        endif;
                    ?>
                    <?php 
                        # Valida si existe la imagen
                        if( get_post_meta( get_the_ID(), 'front_page_image', true ) != null ) :
                            $id_image = get_post_meta( get_the_ID(), 'front_page_image_id', true );     # Obtiene el ID de la imagen.
                            $url_image = wp_get_attachment_image( $id_image, 'section-us' );            # Obtiene el URL, asigna tamaño.
                            echo $url_image;
                        endif; 
                    ?>
                </section>  

            </div>
        </div>

        <?php
            $phone = get_post_meta( get_the_ID(), 'contact_phone', true );

            if( ! empty( $phone ) ) : 
        ?>
            <div class="row justify-content-center align-content-center">
                <div class="col-12 col-md-8 col-lg-10">

                    <section class="us__call-us">
                        
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12 col-md-6">
                                
                                <hgroup>
                                    <h3>Llamenos a</h3>
                                    <h2><?php echo $phone; ?></h2>
                                </hgroup>
                            </div>
                            <div class="col-12 col-md-6">
                                <a class="nav-link my-2 my-sm-0 btn btn-primary btn__action" href="#">Cotice ahora!</a>
                            </div>
                        </div>
                    </section>

                </div>    
            </div>
        <?php
            endif;
        ?>

    </section>
</div>
<!--aside class="sidebar">
    <h3>Barra lateral</h3>
</aside-->