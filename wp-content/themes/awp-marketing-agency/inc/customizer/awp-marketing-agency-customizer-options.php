<?php
/**
 * Customizer section options.
 *
 * @package coin-market
 */

function awp_marketing_agency_customizer_theme_settings( $wp_customize ) {

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

		$wp_customize->add_setting(
			'awpbusinesspress_footer_copright_text',
			array(
				'sanitize_callback' => 'wp_kses_post',
				'default'           => __( 'Copyright &copy; 2023 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Coin Market theme by A WP Life', 'coin-market' ),
				'transport'         => $selective_refresh,
			)
		);

		$wp_customize->add_control(
			'awpbusinesspress_footer_copright_text',
			array(
				'label'    => esc_html__( 'Footer Copyright', 'coin-market' ),
				'section'  => 'awpbusinesspress_footer_copyright',
				'priority' => 10,
				'type'     => 'textarea',
			)
		);

}
add_action( 'customize_register', 'awp_marketing_agency_customizer_theme_settings' );
