<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\d6\MigrateUploadEntityFormDisplayTest.
 */

namespace Drupal\migrate_drupal\Tests\d6;

use Drupal\migrate\MigrateExecutable;
use Drupal\migrate_drupal\Tests\MigrateDrupalTestBase;

/**
 * Upload form entity display.
 *
 * @group migrate_drupal
 */
class MigrateUploadEntityFormDisplayTest extends MigrateDrupalTestBase {

  /**
   * The modules to be enabled during the test.
   *
   * @var array
   */
  static $modules = array('file', 'node');

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    entity_create('node_type', array('type' => 'article'))->save();
    entity_create('node_type', array('type' => 'story'))->save();
    entity_create('node_type', array('type' => 'page'))->save();

    $id_mappings = array(
      'd6_upload_field_instance' => array(
        array(array(1), array('node', 'page', 'upload')),
      ),
    );
    $this->prepareIdMappings($id_mappings);

    $migration = entity_load('migration', 'd6_upload_entity_form_display');
    $dumps = array(
      $this->getDumpDirectory() . '/Drupal6UploadInstance.php',
    );
    $this->prepare($migration, $dumps);
    $executable = new MigrateExecutable($migration, $this);
    $executable->import();

  }

  /**
   * Tests the Drupal 6 upload settings to Drupal 8 entity form display migration.
   */
  public function testUploadEntityFormDisplay() {
    $display = entity_get_form_display('node', 'page', 'default');
    $component = $display->getComponent('upload');
    $this->assertEqual($component['type'], 'file_generic');

    $display = entity_get_form_display('node', 'story', 'default');
    $component = $display->getComponent('upload');
    $this->assertEqual($component['type'], 'file_generic');

    // Assure this doesn't exist.
    $display = entity_get_form_display('node', 'article', 'default');
    $component = $display->getComponent('upload');
    $this->assertTrue(is_null($component));

    $this->assertEqual(array('node', 'page', 'default', 'upload'), entity_load('migration', 'd6_upload_entity_form_display')->getIdMap()->lookupDestinationID(array('page')));
  }

}
