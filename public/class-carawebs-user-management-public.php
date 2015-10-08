<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Carawebs_User_Management
 * @subpackage Carawebs_User_Management/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Carawebs_User_Management
 * @subpackage Carawebs_User_Management/public
 * @author     Your Name <email@example.com>
 */
class Carawebs_User_Management_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $carawebs_user_management    The ID of this plugin.
	 */
	private $carawebs_user_management;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $carawebs_user_management       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $carawebs_user_management, $version ) {

		$this->carawebs_user_management = $carawebs_user_management;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Carawebs_User_Management_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Carawebs_User_Management_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->carawebs_user_management, plugin_dir_url( __FILE__ ) . 'css/carawebs-user-management-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Carawebs_User_Management_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Carawebs_User_Management_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->carawebs_user_management, plugin_dir_url( __FILE__ ) . 'js/carawebs-user-management-public.js', array( 'jquery' ), $this->version, false );

	}

}
