<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'customize_register', 'exhale_finkom_layout_settings' );

// Add fields site identity section and new footer section in customizer
function exhale_finkom_layout_settings( $wp_customize ) {

	// Store Address
	$wp_customize->add_setting(
		'app_header_alignment',
		array(
			'default'           => 'alignleft',
			'sanitize_callback' => 'sanitize_text_field',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'app_header_alignment',
			array(
                'label'          => __( 'Header alignment', 'exhale-finkom' ),
                'description'    => __( 'Select alignment for logo or title in header', 'exhale-finkom' ),
				'section'        => 'layout',
                'settings'       => 'app_header_alignment',
                'type'           => 'radio',
                'choices'        => array(
                                    'logoleft'   => __( 'Left' ),
                                    'logocenter'  => __( 'Center' ),
                                    'logoright'  => __( 'Right' )
                                    ),
				'priority'       => 20
			)
		)
    );
}