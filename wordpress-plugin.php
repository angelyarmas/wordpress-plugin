<?php
/**
 * Plugin Name:     Wordpress plugin
 * Plugin URI:      https://github.com/angelyarmas/wordpress-plugin
 * Description:     Base scaffold for WordPress plugins
 * Author:          Ángel Yarmas
 * Author URI:      https://github.com/angelyarmas
 * Text Domain:     wordpress-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wordpress_Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Load composer dependencies
require_once __DIR__ . '/vendor/autoload.php';
