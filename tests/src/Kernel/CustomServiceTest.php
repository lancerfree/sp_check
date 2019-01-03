<?php

namespace Drupal\Tests\sp_check\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests Custom Service.
 *
 * @group sp_check
 */
class CustomServiceTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['sp_check'];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * DataProvider for testService.
   *
   * @return array
   *   The array of values to run tests on.
   */
  public function sumResults() {
    return [
      [2, 2, 4],
      [3, 7, 10],
    ];
  }

  /**
   * Tests service sum method.
   *
   * @param integer $first_num
   *   First number.
   * @param integer $second_num
   *   Second number.
   * @param integer $sum
   *   Expected result.
   *
   * @throws
   *
   * @dataProvider sumResults
   */
  public function testService($first_num, $second_num, $sum) {

    $math_service = $this->container->get('sp_check.custom_math');
    // Get result.
    $result = $math_service->sum($first_num, $second_num);

    $this->assertEquals($sum, $result, "Method sum, First number:$first_num,Second number: $second_num Result: $result");
  }

}
