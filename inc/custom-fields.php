<?php 
    # Campos personalizados específicos de CMB2 (v2.6.0) para el Tema.

  
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function abc_servitodo_register_demo_metabox() {
    $prefix = 'page';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_page = new_cmb2_box( array(
		'id'            => $prefix .'_metabox',
        'title'         => esc_html__( 'Icono de página', 'abc-servitodo' ),
		'object_types'  => array( 'page' ), // Post type
    ) );
    
    $cmb_page -> add_field( array(
            'name' => esc_html__( 'Imagen:', 'abc-servitodo' ),
            'desc' => esc_html__( 'Sube una imagen o ingresa una URL (preferiblemente png transparente cuadrado o svg)', 'abc-servitodo' ),
            'id'   => $prefix . '_icon',
            'type' => 'file',
            'text' => array(
                'add_upload_file_text' => esc_html__( 'Agregar', 'abc-servitodo' ), # Change upload button text. Default: "Add or Upload File"
            ),
             // query_args are passed to wp.media's library query.
            'query_args' => array(
                //'type' => 'application/pdf', // Make library only display PDFs.
                // Or only allow gif, jpg, or png images
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                ),
            ),
            'preview_size' => array( '150', '150' ), // Image size to use when previewing in the admin.
    
            'mb_callback_args' => ['__block_editor_compatible_meta_box' => true]
    ) );

}
add_action( 'cmb2_admin_init', 'abc_servitodo_register_demo_metabox' );
