<?php

require_once 'CiviTest/CiviUnitTestCase.php';

/**
 * FIXME
 */
class CRM_Civibooking_BAO_ResourceConfigOptionTest extends CiviUnitTestCase {
  function setUp() {
    // If your test manipulates any SQL tables, then you should truncate
    // them to ensure a consisting starting point for all tests
    // $this->quickCleanup(array('example_table_name'));
    parent::setUp();
  }

  function tearDown() {
    parent::tearDown();
  }

  function testCreate(){
    $params = array() ;
    $dao = CRM_Civibooking_BAO_Resource::create($params);
    $this->assertNotEmpty($dao->toArray());
  }
}
