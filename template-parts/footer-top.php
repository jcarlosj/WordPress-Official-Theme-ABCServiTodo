<?php
/**
 * Template part for displaying footer top
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<section class="footer__top">
    <div class="container">

        <div class="row widgets">
            <div class="col-md-4 my-3 my-md-0">
                <hgroup>
                    <h3>Conócenos</h3>
                    <h2>Nuestro Equipo</h2>
                </hgroup>
                <div class="row">
                    <div class="col-5 col-md-12">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() .'/dist/assets/images/logo-abcservitodo.png'; ?>" alt="ABC ServiTodo">
                    </div>
                    <div class="col-7 col-md-12">
                        <p>Itaque tempore nisi eaque esse sint! Animi nostrum exercitationem mollitia, repudiandae dolores illum cumque ducimus rerum error?</p>
                        <a class="btn btn-primary" href="./nosotros.html">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <?php # Titulos de la sección
                    $headers = [
                        "title" => get_post_meta( get_the_ID(), 'contact_title', true ),
                        "subtitle" => get_post_meta( get_the_ID(), 'contact_subtitle', true )
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
                <ul class="info-site">
                    <?php 
                        $email = get_post_meta( get_the_ID(), 'contact_email', true );
                        $phone = get_post_meta( get_the_ID(), 'contact_phone', true );
                        $address = get_post_meta( get_the_ID(), 'contact_business_hours', true );

                        if( ! empty( $email ) ) :
                    ?>
                    <li><strong>Teléfono: </strong><?php echo $phone; ?></li>
                    <?php 
                        endif; 
                        if( ! empty( $phone ) ) :
                    ?>
                    <li><strong>Correo: </strong><?php echo $email; ?></li>
                    <?php 
                        endif; 
                        if( ! empty( $phone ) ) :
                    ?>
                    <li><strong>Dirección: </strong><?php echo $address; ?></li>
                    <?php 
                        endif; 
                    ?>
                </ul>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <hgroup>
                    <h3>Mantente al tanto</h3>
                    <h2>Registrate a nuestro boletín</h2>
                </hgroup>
                <p>Podrás mantenerte al tanto de toda nuestra información relevante</p>

                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Correo electrónico"
                            aria-label="Correo electrónico" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button"
                                id="btn-register">Registrar</button>
                        </div>
                    </div>
                </form>
                <nav class="d-flex justify-content-center">
                    <ul class="btn-group nav menu-social">
                        <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.facebook.com"><span class="social--without-text">Facebook</span></a></li>
                        <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.twitter.com"><span class="social--without-text">Twitter</span></a></li>
                        <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.instagram.com"><span class="social--without-text">Instagram</span></a></li>
                        <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.pinterest.com"><span class="social--without-text">Pinterest</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>