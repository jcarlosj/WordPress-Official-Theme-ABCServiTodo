<?php 
    # Campos personalizados específicos de CMB2 (v2.6.0) para el Tema.

    function abc_servitodo_register_metabox_page() {
        $prefix = 'page';

        /** Metabox para todos los 'post' tipo 'page' */
        $cmb_page = new_cmb2_box( array(
            'id'            => $prefix .'_metabox',
            'title'         => esc_html__( 'Personalización de página', 'abc-servitodo' ),
            'object_types'  => array( 'page' ), // Post type
        ) );

        /** Campo Texto  */
        $cmb_page -> add_field( array(
            'name'    => 'Sub-título',
            'desc'    => 'Sub-título para la página (optional)',
            'default' => '',
            'id'      => $prefix .'_subtitle',
            'type'    => 'text',
        ) );

        /** Campo Imagen  */
        $cmb_page -> add_field( array(
                'name' => esc_html__( 'Ícono de la página:', 'abc-servitodo' ),
                'desc' => esc_html__( 'Sube un ícono para la página o ingresa su URL, preferiblemente un PNG transparente, cuadrado. (opcional)', 'abc-servitodo' ),
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
    add_action( 'cmb2_admin_init', 'abc_servitodo_register_metabox_page' );

    function abc_servitodo_register_metabox_front_page() {
        $prefix = 'front_page';
        $home_id = get_option( 'page_on_front' );       # Get ID Page

        /** Metabox para el 'post' tipo 'page' del Home (front-page.php) */
        $cmb_front_page_part_1 = new_cmb2_box( array(
            'id'            => $prefix .'_metabox_1',
            'title'         => esc_html__( 'Sección Nosotros - Acordeón', 'abc-servitodo' ),
            'show_on'       => array( 'id' => $home_id ),     # Only show on the "home" page
            'object_types'  => array( 'page' ), // Post type
        ) );

        /** Campo Texto  */
        $cmb_front_page_part_1 -> add_field( array(
            'name'    => 'Título',
            'desc'    => 'Título para la sección (optional)',
            'default' => '',
            'id'      => $prefix .'_title_1',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_front_page_part_1 -> add_field( array(
            'name'    => 'Sub-título',
            'desc'    => 'Sub-título para la sección (optional)',
            'default' => '',
            'id'      => $prefix .'_subtitle_1',
            'type'    => 'text',
        ) );

        /** Agrupa campos */ 
        $group_field_id = $cmb_front_page_part_1 -> add_field( array(
            'id'          => $prefix .'_group',
            'type'        => 'group',
            'description' => __( 'Esta sección pretende que pueda describir a través de pasos el flujo o manera como trabaja con sus clientes, es decir desde el primer contacto hasta la entrega del trabajo.', 'cmb2' ),
            // 'repeatable'  => false, // use false if you want non-repeatable group
            'options'     => array(
                'group_title'       => __( 'Paso {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
                'add_button'        => __( 'Agregar ítem', 'cmb2' ),
                'remove_button'     => __( 'Eliminar ítem', 'cmb2' ),
                'sortable'          => true,
                // 'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        ) );
        
        /** Campo de 'text' agrupado */
        // Las identificaciones para los campos del grupo solo tienen que ser únicas para el grupo. El prefijo no es necesario.
        $cmb_front_page_part_1 -> add_group_field( $group_field_id, array(
            'name' => esc_html__( 'Enunciado', 'cmb2' ),
            'description' => esc_html__( 'Frase que describa el paso', 'cmb2' ),
            'id'   => 'question',
            'type' => 'text',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );

        /** Campo de 'textarea' agrupado */
        $cmb_front_page_part_1 -> add_group_field( $group_field_id, array(
            'name' => esc_html__( 'Información', 'cmb2' ),
            'description' => esc_html__( 'Escriba breve descripción de que hace en este paso (preferiblemente un párrafo)', 'cmb2' ),
            'id'   => 'answer',
            'type' => 'textarea_small',
        ) );

        /** Metabox para el 'post' tipo 'page' del Home (front-page.php) */
        $cmb_front_page_part_2 = new_cmb2_box( array(
            'id'            => $prefix .'_metabox_2',
            'title'         => esc_html__( 'Sección Nosotros - Imagen', 'abc-servitodo' ),
            'show_on'       => array( 'id' => $home_id ),     # Only show on the "home" page
            'object_types'  => array( 'page' ), // Post type
        ) );

        /** Campo Texto  */
        $cmb_front_page_part_2 -> add_field( array(
            'name'    => 'Título',
            'desc'    => 'Título para la sección (optional)',
            'default' => '',
            'id'      => $prefix .'_title_2',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_front_page_part_2 -> add_field( array(
            'name'    => 'Sub-título',
            'desc'    => 'Sub-título para la sección (optional)',
            'default' => '',
            'id'      => $prefix .'_subtitle_2',
            'type'    => 'text',
        ) );

        /** Campo de 'file' para cargar imagen */ 
        $cmb_front_page_part_2 -> add_field( 
            array(
                'name' => esc_html__( 'Imagen:', 'cmb2' ),
                'desc' => esc_html__( 'Sube una imágen o ingresa una URL', 'cmb2' ),
                'id'   => $prefix . '_image',
                'type' => 'file',
                //'options' => array(
                //    'url' => true, // Hide the text input for the url
                //),
                'allow' => array( 'url', 'attachment' ), // limit to just attachments with array( 'attachment' )
                'text' => array(
                    'add_upload_file_text' => esc_html__( 'Agregar imagen', 'cmb2' ), # Change upload button text. Default: "Add or Upload File"
                ),
                    // query_args are passed to wp.media's library query.
                'query_args' => array(
                    //'type' => 'application/pdf', // Make library only display PDFs.
                    // Or only allow jpg, or png images
                    'type' => array(
                        'image/jpeg',
                        'image/png',
                    ),
                ),
                'preview_size' => array( '341', '256' ), // Image size to use when previewing in the admin.
                'mb_callback_args' => ['__block_editor_compatible_meta_box' => true]
            ) 
        );
        
    }
    add_action( 'cmb2_admin_init', 'abc_servitodo_register_metabox_front_page' );

    function abc_servitodo_register_metabox_contact_information () {
        $prefix = 'contact';
        $home_id = get_option( 'page_on_front' );       # Get ID Page

        /** Metabox para todos los 'post' tipo 'page' */
        $cmb_contact_information = new_cmb2_box( array(
            'id'            => $prefix .'_metabox',
            'title'         => esc_html__( 'Información de contacto', 'abc-servitodo' ),
            'show_on'       => array( 'id' => $home_id ),     # Only show on the "home" page
            'object_types'  => array( 'page' ), // Post type
        ) );

        /** Campo Título  */
        $cmb_contact_information -> add_field( array(
            'name' => 'Datos generales',
            'desc' => 'Todos los datos registradosen los siguientes campos estarán disponibles para ser mostrados en la plantilla (solo cuando el dato es diligenciado en su respectivo campo)',
            'type' => 'title',
            'id'   => '_title'
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Título',
            'desc'    => 'Título para sección información de contacto (optional)',
            'default' => '',
            'id'      => $prefix .'_title',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Sub-título',
            'desc'    => 'Sub-titulo para sección información de contacto (optional)',
            'default' => '',
            'id'      => $prefix .'_subtitle',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Correo electronico',
            'desc'    => 'Correo electronico de contacto (optional)',
            'default' => '',
            'id'      => $prefix .'_email',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Teléfono',
            'desc'    => 'Número de teléfono de contacto (optional)',
            'default' => '',
            'id'      => $prefix .'_phone',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Horario',
            'desc'    => 'Horario de atención al cliente (optional)',
            'default' => '',
            'id'      => $prefix .'_business_hours',
            'type'    => 'text',
        ) );

        /** Campo Texto  */
        $cmb_contact_information -> add_field( array(
            'name'    => 'Dirección',
            'desc'    => 'Dirección física del establecimiento (optional)',
            'default' => '',
            'id'      => $prefix .'_address',
            'type'    => 'text',
        ) );
    }
    add_action( 'cmb2_admin_init', 'abc_servitodo_register_metabox_contact_information' );
