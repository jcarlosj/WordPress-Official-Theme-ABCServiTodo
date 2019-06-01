<?php
/**
 * Template part for displaying header bottom
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<section class="header__bottom">
    <div class="container">

        <div class="row justify-content-center justify-content-md-start align-items-center">
            <div class="col-12">

                <nav class="navbar navbar-expand-md navbar-light navbar-md-dark">
                    <a class="navbar-brand d-inline-block d-md-none" href="#">
                        <div class="logo--small"></div>
                        <img class="img-fluid mx-auto logo--inside-menu" src="./dist/assets/images/logo-abcservitodo.png" alt="ABC ServiTodo"-->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-main" aria-controls="menu-main" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php if( has_nav_menu( 'primary' ) ): ?>
                        <?php # Define zona de menú en el tema 
                            $args = array(
                                'theme_location'  => 'primary',                                 # Nombre de la ubicación del tema
                                'menu_class'      => 'navbar-nav mr-auto text-uppercase',       # Clases del elemento envuelve los items de la lista: por defecto es el elemento ul
                                'container_id'    => 'menu-main',                               # ID del elemento que envolverá al elemento que contiente los items de la lista
                                'container_class' => 'collapse navbar-collapse menu-main',      # Clases del elemento que envolverá al elemento que contiente los items de la lista
                            );
                            wp_nav_menu( $args );
                        ?>
                    <?php else: ?>
                        No existe
                    <?php endif; ?>
                    
                </nav>

            </div>
        </div>    

    </div>
</section>