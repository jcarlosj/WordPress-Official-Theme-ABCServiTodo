<?php
/**
 * Template part for displaying header top
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_ServiTodo
 */

?>

<section class="header__top">
    <div class="container">

        <div class="row justify-content-end align-items-center">
            <div class="col-12.col-md-8">

                <section class="menu-secondary d-none d-md-block">
                    <?php if( has_nav_menu( 'secondary' ) ): ?>
                        <?php # Define zona de menú en el tema 
                            
                            $args = array(
                                'theme_location'  => 'secondary',                                           # Nombre de la ubicación del tema
                                'menu_class'      => 'btn-group nav menu-secondary text-uppercase',         # Clases del elemento envuelve los items de la lista: por defecto es el elemento ul
                                'container'       => 'nav',                                                 # Elemento 'nav' envolverá al elemento que contiene los items de lista (por defecto es un div)
                                'container_class' => 'btn-toolbar d-flex justify-content-end header__top',  # Clases del elemento que envolverá al elemento que contiente los items de la lista
                            );
                            wp_nav_menu( $args );
                        ?>
                    <?php else: ?>
                        No existe
                    <?php endif; ?>
                </section>
                <!--section class="menu-secondary d-none d-md-block">
                    <nav class="btn-toolbar d-flex justify-content-end header__top" role="toolbar" aria-label="Toolbar with button groups"">
                        <ul class=" btn-group nav menu-secondary text-uppercase" role="group" aria-label="First group">
                            <li class="nav-item"><a class="btn btn-link nav-link" href="#">Tienda</a></li>
                            <li class="nav-item"><a class="btn btn-link nav-link" href="#">Tarjeta</a></li>
                            <li class="nav-item"><a class="btn btn-link nav-link" href="#">Pago</a></li>
                        </ul>
                    </nav>
                </section-->

            </div>
            <div class="col-12.col-md-4">

                <section class="menu-social">
                    <?php if( has_nav_menu( 'social' ) ): ?>
                        <?php # Define zona de menú en el tema 
                            $args = array(
                                'theme_location'  => 'social',                                              # Nombre de la ubicación del tema
                                'menu_class'      => 'btn-group nav menu-social',                           # Clases del elemento envuelve los items de la lista: por defecto es el elemento ul
                                'container'       => 'nav',                                                 # Elemento 'nav' envolverá al elemento que contiene los items de lista (por defecto es un div)
                                'container_class' => 'btn-toolbar d-flex justify-content-end header__top',  # Clases del elemento que envolverá al elemento que contiente los items de la lista
                                'link_before'     => '<span class="social--without-text">',                 # Texto antes del enlace
                                'link_after'      => '</span>',                                             # Texto después del enlace  
                            );  # TO FIX: Solucionar el problema alineación del menú a la derecha en Desktop
                            wp_nav_menu( $args );
                        ?>
                    <?php else: ?>
                        No existe
                    <?php endif; ?>
                </section>
                <!--section class="menu-social">
                    <nav class="btn-toolbar d-flex justify-content-end header__top" role="toolbar" aria-label="Toolbar with button groups"">
                        <ul class=" btn-group nav menu-social" role="group" aria-label="Second group">
                            <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.facebook.com"><span class="social--without-text">Facebook</span></span></a></li>
                            <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.twitter.com"><span class="social--without-text">Twitter</span></a></li>
                            <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.instagram.com"><span class="social--without-text">Instagram</span></a></li>
                            <li class="nav-item"><a class="btn btn-link nav-link" href="https://www.pinterest.com"><span class="social--without-text">Pinterest</span></a></li>
                        </ul>
                    </nav>
                </section-->

            </div> 
        </div>    

    </div>
</section>