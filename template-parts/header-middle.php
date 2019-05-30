<?php
/**
 * Template part for displaying header middle
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

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