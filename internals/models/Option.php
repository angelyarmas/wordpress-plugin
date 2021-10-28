<?php
namespace WPPL\Internals\Models;

class Option
{
  protected $options_key = '';

  /**
   * Wrapper function around cmb2_get_option
   *
   * @since  1.0.0
   */
  public function get_option($key, $default = false)
  {
    if (function_exists('cmb2_get_option')) {
      // Use cmb2_get_option as it passes through some key filters.
      return cmb2_get_option($this->options_key, $key, $default);
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option($this->options_key, $default);

    $val = $default;

    if (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[ $key ]) {
      $val = $opts[ $key ];
    }

    return $val;
  }

  /**
   * Wrapper function around cmb2_update_option.
   *
   * @param string $field_id
   * @param mixed $value
   * @param boolean $single
   * @return mixed
   */
  public function update_option(string $field_id, $value, bool $single = true)
  {
    if (function_exists('cmb2_update_option')) {
      return cmb2_update_option($this->options_key, $field_id, $value, $single);
    }

    return false;
  }
}
