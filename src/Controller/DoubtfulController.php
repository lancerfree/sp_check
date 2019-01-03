<?php

namespace Drupal\sp_check\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for testing.
 */
class DoubtfulController extends ControllerBase {

  /**
   * Returns content of page.
   *
   * @return mixed
   */
  public function getContent() {
    return ['#markup' => $this->t('Test me!')];
  }

}
