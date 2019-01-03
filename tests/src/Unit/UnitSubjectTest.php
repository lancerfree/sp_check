<?php

namespace Drupal\Tests\sp_check\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\sp_check\UnitSubject;

/**
 * @coversDefaultClass \Drupal\sp_check\UnitSubject
 * @group test_data
 */
class UnitSubjectTest extends UnitTestCase {

  /**
   * Data to set.
   */
  const TEST_DATA = 'TEST DATA';

  /**
   * Tested class.
   *
   * @var UnitSubject;
   */
  protected $testClass;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->testClass = new UnitSubject();
  }

  /**
   * @covers ::getData
   */
  public function testData() {
    $this->testClass->setData(self::TEST_DATA);
    $actual_result = $this->testClass->getData();
    $this->assertEquals(self::TEST_DATA, $actual_result, "Method testData says: Functional is damaged!");
  }

  /**
   * @covers ::getData
   */
  public function testDataDamaged() {
    $this->testClass->setData(self::TEST_DATA);
    // Damage data
    $this->testClass->damageData();
    $actual_result = $this->testClass->getData();

    $this->assertEquals(self::TEST_DATA, $actual_result, "Method testDataDamaged says: Functional is damaged!");
  }

}
