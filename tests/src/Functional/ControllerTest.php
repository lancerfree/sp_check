<?php

namespace Drupal\Tests\sp_check\Functional;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests controller functional.
 *
 * @group sp_check
 */
class ControllerTest extends BrowserTestBase {

  use StringTranslationTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['node','sp_check'];

  /**
   * Text to find on the page.
   */
  const TEST_ME_TEXT = 'Test me!';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Tests controller functional.
   *
   * @throws
   */
  public function testController() {
    $url = Url::fromRoute('sp_check.test_controller_functional');
    $this->drupalGet($url);
    // Main prove.
    $this->assertSession()->responseContains(static::TEST_ME_TEXT);
  }

}
