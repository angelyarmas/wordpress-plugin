<?php
namespace WPPL\Internals\Models;

class TermModel
{
  public $term_id;

  /**
   * Create metadata for a given option key.
   *
   * @param string $meta_key
   * @param mixed $meta_value
   * @param boolean $unique
   * @return mixed
   */
  public function add_meta(string $meta_key, mixed $meta_value, bool $unique = false)
  {
    return add_term_meta( $this->term_id, $meta_key, $meta_value, $unique );
  }

  /**
   * Create metadata for a given option key.
   *
   * @param string $meta_key
   * @param mixed $meta_value
   * @param mixed $prev_value
   * @return mixed
   */
  public function update_meta(string $meta_key, mixed $meta_value, mixed $prev_value = null)
  {
    return update_term_meta( $this->term_id, $meta_key, $meta_value, $prev_value );
  }

  /**
   * Create metadata for a given option key.
   *
   * @param string $meta_key
   * @param mixed $meta_value
   * @return bool
   */
  public function delete_meta(string $meta_key, mixed $meta_value = null)
  {
    return delete_term_meta( $this->term_id, $meta_key, $meta_value );
  }
}
