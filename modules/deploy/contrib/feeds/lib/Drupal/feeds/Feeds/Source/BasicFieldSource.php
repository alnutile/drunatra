<?php

/**
 * @file
 * Contains \Drupal\feeds\Source\BasicFieldSource.
 */

namespace Drupal\feeds\Feeds\Source;

use Drupal\feeds\FeedInterface;
use Drupal\feeds\ImporterInterface;
use Drupal\feeds\Plugin\Type\PluginBase;
use Drupal\feeds\Plugin\Type\Source\SourceInterface;

/**
 * @Plugin(
 *   id = "basic_field",
 *   field_types = {
 *     "integer_field",
 *     "boolean_field",
 *     "number_integer",
 *     "number_decimal",
 *     "number_float",
 *     "list_integer",
 *     "list_float",
 *     "list_boolean",
 *     "datetime",
 *     "email_field",
 *     "entity_reference",
 *     "entity_reference_field",
 *     "field_item:text_long",
 *     "field_item:text_with_summary"
 *   }
 * )
 */
class BasicFieldSource extends PluginBase implements SourceInterface {

  /**
   * {@inheritdoc}
   */
  public static function sources(array &$sources, ImporterInterface $importer, array $definition) {
    $field_definitions = \Drupal::entityManager()->getFieldDefinitions('feeds_feed', $importer->id());
    foreach ($field_definitions as $field => $field_definition) {
      if (in_array($field_definition['type'], $definition['field_types'])) {
        $field_definition['label'] = t('Feed: @label', array('@label' => $field_definition['label']));
        $sources['parent:' . $field] = $field_definition;
        $sources['parent:' . $field]['id'] = $definition['id'];
      }
    }
  }

  /**
   * {@inheritdoc}
   *
   * @todo I guess we could cache this since the value will be the same for
   *   $element_key/$feed id combo.
   */
  public function getSourceElement(FeedInterface $feed, array $item, $element_key) {
    list(, $field) = explode(':', $element_key);
    $return = array();

    if ($field_list = $feed->get($field)) {
      foreach ($field_list as $field) {
        $return[] = $field->value;
      }
    }

    return $return;
  }

}
