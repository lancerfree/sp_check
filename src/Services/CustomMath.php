<?php

namespace Drupal\sp_check\Services;

class CustomMath {

  /**
   * {@inheritdoc}
   */
  public function __construct($list_strings = []) {

  }

  /**
   * Sum two numbers.
   *
   * @param integer $first_num
   *   First num.
   * @param integer $second_num
   *   Second num.
   *
   * @return integer
   */
  public function sum($first_num, $second_num) {
    return $first_num + $second_num;
  }

}