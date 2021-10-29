<?php
namespace WPPL\Hooks;

/**
 * Class containing all front hooks in our plugin.
 *
 * @since 1.0.0
 */
class Front
{
  /**
   * Display a small message in the front section
   */
  public function front_head_message()
  {
    if (!is_admin()) {
      echo 'Wordpress plugin in the front section';
    }
  }
}
