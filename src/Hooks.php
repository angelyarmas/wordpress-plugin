<?php
namespace WPPL;

use WPPL\Internals\Loader;

/**
 * Main hooks class,
 * All hooks in our plugin are declared here.
 * @since 0.1.0
 */
final class Hooks
{
  protected $plugin_name;
  protected $version;
  protected $loader;

  public function __construct ()
  {
    $this->plugin_name = 'wordpress-plugin';
    $this->version = '1.0.0';

    $this->load_dependencies();
    $this->define_admin_hooks();
    $this->define_front_hooks();
		$this->register_rest_api_routes();
  }

  /**
   * Load file dependencies and initialize classes.
   *
   * @since    1.0.0
   */
  private function load_dependencies()
  {
    $this->loader = new Loader();
  }

  /**
   * Register all of the hooks related to the admin area functionality.
   *
   * @since    1.0.0
   */
  private function define_admin_hooks()
  {
    $admin = new \WPPL\Hooks\Admin;
    $this->loader->add_action('wp_head', $admin, 'admin_head_message');

    // ...more hooks here
  }

  /**
   * Register all of the hooks related to the front area functionality.
   *
   * @since    1.0.0
   */
  private function define_front_hooks()
  {
    $front = new \WPPL\Hooks\Front;
    $this->loader->add_action('wp_head', $front, 'front_head_message');

    // ...more hooks here
  }

  /**
   * Register all of the hooks related to the plugin's REST API.
   *
   * @since    1.0.0
   */
  private function register_rest_api_routes()
  {
    // ...more hooks here
  }

  /**
   * Run the loader to execute all of the hooks with WordPress.
   *
   * @since    1.0.0
   */
  public function run()
  {
    $this->loader->run();
  }
}
