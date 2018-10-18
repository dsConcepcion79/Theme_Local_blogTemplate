<?php
/**
 *
 * Rain's Modules plugin.
 *
 * @package standard-industries
 */

namespace Rain;

/**
 * Modules singleton class.
 */
class Modules {
	/**
	 * Class instance.
	 *
	 * @var Rain\Modules instance.
	 */
	private static $instance;

	/**
	 * Modules sections.
	 *
	 * @var array Contains all sections and modules.
	 */
	private $module_sections = [];

	/**
	 * Modules screenshots.
	 *
	 * @var array Contains reference to modules screenshots, if they exist.
	 */
	private $modules_screenshots = [];

	/**
	 * Class constructor.
	 *
	 * Declared private so no new instances can be created.
	 */
	private function __construct() {
		add_action( 'init', array( $this, 'register_field_groups' ), 10 );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ), 10 );
		add_action( 'save_post', array( $this, 'save_post_content' ), 99 );
	}

	/**
	 * Returns the class instance.
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Clone.
	 *
	 * We don't allow cloning this class.
	 *
	 * @throws Exception When trying to clone class.
	 */
	public function __clone() {
		throw new Exception( 'Modules is a singleton class.' );
	}

	/**
	 * Attaches a modules section on the desired post type.
	 *
	 * @param string $section The section name slug.
	 * @param string $post_type The desired post type.
	 */
	public function add_module_section( $section, $post_type ) {
		$this->module_sections[ $section ] = array(
			'key' => 'group_' . md5( $section ),
			'title' => 'Content Modules',
			'fields' => array(
				array(
					'key' => 'rain_content_modules',
					'label' => 'Modules',
					'name' => 'modules',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layouts' => array(),
					'button_label' => 'Add Module',
					'min' => '',
					'max' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => $post_type,
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'the_content',
			),
			'active' => 1,
			'description' => '',
		);
	}

	/**
	 * Adds module to section.
	 *
	 * @param string $module_name The module name.
	 * @param string $module_slug Module slug. Should be same as folder containing it.
	 * @param string $section The section name slug.
	 * @param array  $module_fields The fields, as outputted by ACF.
	 */
	public function add_module( $module_name, $module_slug, $section, $module_fields ) {
		$section_modules = &$this->module_sections[ $section ]['fields'][0]['layouts'];
		$module_key = md5( $module_slug );

		$section_modules[ $module_key ] = array(
			'key' => $module_key,
			'name' => $module_slug,
			'label' => $module_name,
			'display' => 'block',
			'sub_fields' => $module_fields,
			'min' => '',
			'max' => '',
		);
	}

	/**
	 * Registers field groups in ACF.
	 */
	public function register_field_groups() {
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			foreach ( $this->module_sections as $field_group ) {
				acf_add_local_field_group( $field_group );
			}
		}
	}

	/**
	 * Renders modules templates.
	 *
	 * @param int $post_id The post ID.
	 */
	public function render_modules( $post_id ) {
		if ( function_exists( 'have_rows' ) && have_rows( 'rain_content_modules', $post_id ) ) {
			while ( have_rows( 'rain_content_modules', $post_id ) ) {
				the_row();

				$layout = str_replace( '_', '-', get_row_layout() );
				get_template_part( 'modules/' . $layout . '/template' );
			}
		}
	}

	/**
	 * Traverses the modules path and includes existing modules.
	 *
	 * Each module must include a module.php and template.php file.
	 *
	 * @param string $modules_path The path to the modules folder.
	 */
	public function load_modules( $modules_path ) {
		// Load components first.
		$this->load_components( $modules_path );

		$directory = new \DirectoryIterator( $modules_path );

		foreach ( $directory as $file ) {

			if ( ! $file->isDot() && $file->isDir() ) {
				try {
					$module_file = $modules_path . $file->getFilename() . '/module.php';
					if ( file_exists( $module_file ) ) {
						include_once( $module_file );
						$this->load_screenshots( $modules_path, $file->getFilename() );
					}
				} catch (Exception $e) {
					// Broken modules should not break WP. Could be a module in development.
					error_log( $e->getMessage() ); // @codingStandardsIgnoreLine.
				}
			}
		}
	}

	/**
	 * Checks if a screenshot exists in the module, so it can be displayed when adding them.
	 *
	 * @param string $path The modules path.
	 * @param string $filename The module folder.
	 */
	private function load_screenshots( $path, $filename ) {
		$full_path = $path . $filename . '/screenshot.png';
		if ( file_exists( $full_path ) ) {
			$this->modules_screenshots[ $filename ] = home_url( str_replace( ABSPATH, '', $full_path ) );
		}
	}

	/**
	 * Enqueues admin area styles and JS.
	 */
	public function enqueue_assets() {
		wp_enqueue_style( 'rain-modules-admin-styles', get_stylesheet_directory_uri() . '/plugins/modules/css/admin-styles.css', array(), filemtime( get_stylesheet_directory() . '/plugins/modules/css/admin-styles.css' ) );

		wp_register_script( 'rain-modules-admin-js', get_stylesheet_directory_uri() . '/plugins/modules/js/admin.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/plugins/modules/js/admin.js' ) );

		wp_enqueue_script( 'rain-modules-admin-js' );

		wp_localize_script( 'rain-modules-admin-js', 'RainModules', array(
				'screenshots' => $this->modules_screenshots,
			)
		);
	}

	/**
	 * Loads reusable components for modules.
	 *
	 * @param string $path The modules path.
	 */
	private function load_components( $path ) {
		$directory = new \DirectoryIterator( $path . 'components/' );

		foreach ( $directory as $file ) {
			if ( $file->getExtension() === 'php' ) {
				try {
					// Broken components should not break WP.
					include_once( $path . 'components/' . $file->getFilename() );
				} catch (Exception $e) {
					error_log( $e->getMessage()) ; // @codingStandardsIgnoreLine.
				}
			}
		}
	}

	/**
	 * Renders post content to be saved.
	 *
	 * @param int $post_id The post ID being saved.
	 */
	function save_post_content( $post_id ) {
		if ( function_exists( 'have_rows' ) && have_rows( 'rain_content_modules', $post_id ) ) {
			$updated_post = array(
				'ID' => $post_id,
			);

			ob_start();
			$this->render_modules( $post_id );
			$output = ob_get_contents();
			ob_end_clean();

			$updated_post['post_content'] = $output;

			remove_action( 'save_post', array( $this, 'save_post_content' ), 99 );
			wp_update_post( $updated_post );
			add_action( 'save_post', array( $this, 'save_post_content' ), 99 );
		}
	}
}
