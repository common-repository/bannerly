<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Bannerly
 * @subpackage Bannerly/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bannerly
 * @subpackage Bannerly/admin
 * @author     Your Name <email@example.com>
 */
class Bannerly_Admin
{

  /**
   * The ID of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $bannerly    The ID of this plugin.
   */
  private $bannerly;

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
   * @param      string    $bannerly       The name of this plugin.
   * @param      string    $version    The version of this plugin.
   */
  public function __construct($bannerly, $version)
  {

    $this->bannerly = $bannerly;
    $this->version = $version;
  }

  /**
   * Register the stylesheets for the admin area.
   *
   * @since    1.0.0
   */
  public function enqueue_styles()
  {

    /**
     * This function is provided for demonstration purposes only.
     *
     * An instance of this class should be passed to the run() function
     * defined in Bannerly_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The Bannerly_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     */

    wp_enqueue_style($this->bannerly, plugin_dir_url(__FILE__) . 'css/bannerly-admin.css', array(), $this->version, 'all');
  }

  /**
   * Register the JavaScript for the admin area.
   *
   * @since    1.0.0
   */
  public function enqueue_scripts()
  {

    /**
     * This function is provided for demonstration purposes only.
     *
     * An instance of this class should be passed to the run() function
     * defined in Bannerly_Loader as all of the hooks are defined
     * in that particular class.
     *
     * The Bannerly_Loader will then create the relationship
     * between the defined hooks and the functions defined in this
     * class.
     */

    wp_enqueue_script($this->bannerly, plugin_dir_url(__FILE__) . 'js/bannerly-admin.js', array('jquery'), $this->version, false);
  }

  public function admin_menu()
  {
    add_options_page("Bannerly", "Bannerly", 'manage_options', 'bannerly', array($this, 'load_admin_page_content'));
  }

  public function load_admin_page_content()
  {
    require_once plugin_dir_path(__FILE__) . 'partials/bannerly-admin-display.php';
  }

  public function admin_init()
  {
    register_setting('bannerly_options', 'bannerly_options');
    register_setting('bannerly_options', 'bannerly_api_key');
  }

  public function bannerly_api_key()
  {
    $options = get_option('bannerly_api_key');
    print_r($options);
    echo "<input id='bannerly_api_key' name='bannerly[api_key]' type='text' value='" . esc_attr($options['api_key']) . "' />";
  }
}
