<?php
/**
 * Tish4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function tish4_enqueue_styles() {

	wp_enqueue_style( 'tish1-stylesheet', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'tish4-child-style', get_stylesheet_uri(), array( 'tish4-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'tish4_enqueue_styles' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function tish4_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'      => __('Universal Slider', 'tish4'),
			'slug'      => 'fusion-slider',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tish4',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'tish4_register_required_plugins' );


if ( ! class_exists( 'tish4_Customize' ) ) :
	/**
	 * Singleton class for handling the theme's customizer integration.
	 */
	final class tish4_Customize {

		// Returns the instance.
		public static function get_instance() {

			static $instance = null;

			if ( is_null( $instance ) ) {
				$instance = new self;
				$instance->setup_actions();
			}

			return $instance;
		}

		// Constructor method.
		private function __construct() {}

		// Sets up initial actions.
		private function setup_actions() {

			// Register panels, sections, settings, controls, and partials.
			add_action( 'customize_register', array( $this, 'sections' ) );

			// Register scripts and styles for the controls.
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
		}

		// Sets up the customizer sections.
		public function sections( $manager ) {

			// Load custom sections.

			// Register custom section types.
			$manager->register_section_type( 'tish1_Customize_Section_Pro' );

			// Register sections.
			$manager->add_section(
				new tish1_Customize_Section_Pro(
					$manager,
					'tish4',
					array(
						'title'    => esc_html__( 'Tish4Pro', 'tish4' ),
						'pro_text' => esc_html__( 'Upgrade', 'tish4' ),
						'pro_url'  => esc_url( 'https://tishthemes.com/product/tish4pro' )
					)
				)
			);
		}

		// Loads theme customizer CSS.
		public function enqueue_control_scripts() {

			wp_enqueue_script( 'tish1-customize-controls', trailingslashit( get_template_directory_uri() ) . 'js/customize-controls.js', array( 'customize-controls' ) );

			wp_enqueue_style( 'tish1-customize-controls', trailingslashit( get_template_directory_uri() ) . 'css/customize-controls.css' );
		}
	}
endif; // tish4_Customize

// Doing this customizer thang!
tish4_Customize::get_instance();

/**
 * Remove Parent theme Customize Up-Selling Section
 */
if ( ! function_exists( 'tish4_remove_parent_theme_upsell_section' ) ) :

	function tish4_remove_parent_theme_upsell_section( $wp_customize ) {

		// Remove Parent-Theme Upsell section
		$wp_customize->remove_section('tish1');
	}

endif; // tish4_remove_parent_theme_upsell_section

add_action( 'customize_register', 'tish4_remove_parent_theme_upsell_section', 100 );
