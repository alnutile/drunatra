<?php

/**
 * @file
 * Contains \Drupal\feeds\Plugin\Type\FeedsPluginInterface.
 */

namespace Drupal\feeds\Plugin\Type;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Interface that all Feeds plugins must implement.
 */
interface FeedsPluginInterface extends PluginInspectionInterface {

  /**
   * Returns the type of plugin.
   *
   * @return string
   *   The type of plugin. Usually, one of 'fetcher', 'parser', or 'processor'.
   *
   * @see \Drupal\feeds\Plugin\Type\FeedsPluginManager::processDefinition()
   */
  public function pluginType();

}
