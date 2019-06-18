<?php

	/** Display ID Label for Column */ 
	if ( ! function_exists( 'abc_servitodo_posts_and_pages_column_title_id' ) ) :
		function abc_servitodo_posts_and_pages_column_title_id( $columns ) {
			$columns[ 'wps_post_id' ] = __( 'ID' );
			#return print_r( $columns ); 
			return $columns;
		}
	endif;
	add_filter( 'manage_posts_columns', 'abc_servitodo_posts_and_pages_column_title_id', 5 );
	add_filter( 'manage_pages_columns', 'abc_servitodo_posts_and_pages_column_title_id', 5 );

	/** Display ID Post and Page */ 
	if ( ! function_exists( 'abc_servitodo_posts_and_pages_id' ) ) :
		function abc_servitodo_posts_and_pages_id( $column, $id ) {
			if( $column === 'wps_post_id' ) echo $id;
		}
	endif;
	add_action( 'manage_posts_custom_column', 'abc_servitodo_posts_and_pages_id', 5, 2 );
	add_action( 'manage_pages_custom_column', 'abc_servitodo_posts_and_pages_id', 5, 2 );