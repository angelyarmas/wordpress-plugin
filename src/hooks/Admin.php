<?php
namespace WPPL\Hooks;

/**
 * Class containing all admin hooks in our plugin.
 *
 * @since 1.0.0
 */
class Admin
{
  /**
   * Display a small message in the admin section
   */
  public function admin_head_message()
  {
    if (is_admin()) {
      echo 'Wordpress plugin in the admin section';
    }
  }
}
