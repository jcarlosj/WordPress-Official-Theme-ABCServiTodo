<?php
/**
 * Implementation of the Custom Menu for Bootstrap 4 
 * 
 * You can add an optional custom classes for list items and links of menu
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package ABC_ServiTodo
 */

if ( ! function_exists( 'abc_servitodo_modify_link_classes_menu' ) ) :
    /**
	 * Modifica atributos del elemento a del menú secundario
     * 
     * 1. Agrega la clase 'btn btn-link nav-link' al elemento a del menú principal
	 * @see abc_servitodo_modify_link_classes_menu().
	 */

    function abc_servitodo_modify_link_classes_menu( $attrs, $items, $args ) {
    
        #echo '<pre><code>'; var_dump( $args ); echo '</code></pre>'; exit();
    
        # Valida la existencia de una ubicación de menú llamada 'primary'
        if( 'primary' === $args -> theme_location ) {
            $attrs[ 'class' ] = 'btn btn-link nav-link';
        }
        # Valida la existencia de una ubicación de menú llamada 'primary'
        if( 'secondary' === $args -> theme_location ) {
            $attrs[ 'class' ] = 'btn btn-link nav-link';
        }
        # Valida la existencia de una ubicación de menú llamada 'social'
        if( 'social' === $args -> theme_location ) {
            $attrs[ 'class' ] = 'btn btn-link nav-link link-social';
        }
        return $attrs;
    }
    add_filter( 'nav_menu_link_attributes', 'abc_servitodo_modify_link_classes_menu', 10, 3 );

endif;    


if ( ! function_exists( 'abc_servitodo_modify_item_classes_menu' ) ) :
    /** Modifica atributos del elemento li del menú secundario
     * 
     * 	1. Elimina todas las clases del elemento li 
     * 	2. Agrega la clase 'nav-item' al elemento li 
     * @see abc_servitodo_modify_item_classes_menu().
    */
    function abc_servitodo_modify_item_classes_menu( $classes, $item, $args, $depth ) {
        # Valida la existencia de una ubicación de menú llamada 'primary'
        if( 'primary' === $args -> theme_location ) {
            unset( $classes );			# Elimina todas las clases del Array
            $classes[] = '';			# Agrega el nombre de la clase que deseamos agregar
        }
        # Valida la existencia de una ubicación de menú llamada 'secondary'
        if( 'secondary' === $args -> theme_location ) {
            unset( $classes );			# Elimina todas las clases del Array
            $classes[] = 'nav-item';	# Agrega el nombre de la clase que deseamos agregar
        }
        # Valida la existencia de una ubicación de menú llamada 'social'
        if( 'social' === $args -> theme_location ) {
            unset( $classes );			# Elimina todas las clases del Array
            $classes[] = 'nav-item';	# Agrega el nombre de la clase que deseamos agregar
        }
        return $classes;
    }
    add_filter( 'nav_menu_css_class', 'abc_servitodo_modify_item_classes_menu', 10, 4 ); 
 
endif;    