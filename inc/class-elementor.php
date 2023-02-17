<?php
/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */

namespace Travelcations;

class Elementor {
	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $instance = null;
	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {
		// Register custom widget categories.
		add_action( 'elementor/elements/categories_registered', array( $this, 'add_elementor_widget_categories' ) );
		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', array( $this, 'widget_scripts' ) );
		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets' ) );
	}

	/**
	 * Register custom widget categories.
	 */
	public function add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'travelcations',
			array(
				'title' => esc_html__( 'Travelcations', 'travelcations' ),
			)
		);
	}
	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_register_script(
			'travelcations-testimonial',
			TRAVELCATIONS_URI . 'assets/js/elementor/testimonial' . travelcations_suffix() . '.js',
			array( 'jquery', 'swiper' ),
			TRAVELCATIONS_VER,
			true
		);

		wp_register_script(
			'travelcations-video-popup',
			TRAVELCATIONS_URI . 'assets/js/elementor/video-popup' . travelcations_suffix() . '.js',
			array( 'jquery', 'html5lightboxjs' ),
			TRAVELCATIONS_VER,
			true
		);

		wp_register_script(
			'travelcations-blog',
			TRAVELCATIONS_URI . 'assets/js/elementor/blog' . travelcations_suffix() . '.js',
			array( 'jquery', 'masonry' ),
			TRAVELCATIONS_VER,
			true
		);

		$admin_vars = array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'travelcations_loadmore' ),
		);

		wp_localize_script(
			'travelcations-blog',
			'admin',
			$admin_vars
		);

		wp_register_script(
			'travelcations-blog-slider',
			TRAVELCATIONS_URI . 'assets/js/elementor/blog-slider' . travelcations_suffix() . '.js',
			array( 'jquery', 'swiper' ),
			TRAVELCATIONS_VER,
			true
		);

		wp_register_script(
			'boostify-addon-testimonial',
			TRAVELCATIONS_URI . 'assets/js/elementor/testimonial' . travelcations_suffix() . '.js',
			array( 'jquery', 'swiper' ),
			TRAVELCATIONS_VER,
			true
		);
	}
	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {

		$widgets = glob( TRAVELCATIONS_DIR . 'inc/widgets/*.php' );

		foreach ( $widgets as $key ) {
			if ( file_exists( $key ) ) {
				require_once $key;
			}
		}
	}
	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		$widgets = glob( TRAVELCATIONS_DIR . 'inc/widgets/*.php' );
		// Register Widgets
		foreach ( $widgets as $key ) {
			if ( file_exists( $key ) ) {
				$paths      = pathinfo( $key );
				$prefix     = str_replace( '-', ' ', $paths['filename'] );
				$prefix     = ucwords( $prefix );
				$class_name = str_replace( ' ', '_', $prefix );
				$class_name = str_replace( 'Class_', '', $class_name );
				$class_name = '\\' . __NAMESPACE__ . '\\' . $class_name;
				\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $class_name() );
			}
		}
	}
}
// Instantiate travelcations_Elementor Class
\Travelcations\Elementor::instance();
