<?php

namespace Drupal\sp_check;

/**
 * Class UnitSubject.
 *
 * For Testing.
 */
class UnitSubject {

  /**
   * Contains data to check.
   *
   * @var mixed
   */
  public $dataToTest;

  /**
   * Constructor.
   *
   * @param mixed $data
   *   Data to set.
   */
  function __construct($data = NULL) {
    $this->setData($data);
  }

  /**
   * Sets data.
   *
   * @param mixed $data
   *   Data to set.
   */
  public function setData($data) {
    $this->dataToTest = $data;
  }

  /**
   * Returns data.
   *
   * @return mixed
   */
  public function getData() {
    return $this->dataToTest;
  }

  /**
   * Damages data.
   */
  public function damageData() {
    $this->dataToTest = rand();
  }

}