<?php
/**
 * Template part for displaying footer bottom
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<section class="footer__bottom">
    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <?php if( has_nav_menu( 'primary' ) ): ?>
                    <?php # Define zona de menú en el tema 
                        $args = array(
                            'theme_location'  => 'primary',                                                                                             # Nombre de la ubicación del tema
                            'menu_class'      => 'menu navbar navbar-nav d-flex flex-column flex-md-row text-center text-md-left text-uppercase',       # Clases del elemento envuelve los items de la lista: por defecto es el elemento ul
                            'container'       => 'nav',                                                                                                 # Elemento 'nav' envolverá al elemento que contiene los items de lista (por defecto es un div)
                            'container_class' => 'menu-main d-flex justify-content-start',                                                              # Clases del elemento que envolverá al elemento que contiente los items de la lista
                        ); 
                        wp_nav_menu( $args );
                    ?>
                <?php else: ?>
                    No existe
                <?php endif; ?>

            </div>
            <div class="col-md-6">
                <p class="text-center text-md-right copyright">Todos los derechos reservados &copy; 2019</p>
            </div>
        </div>

    </div>
</section>