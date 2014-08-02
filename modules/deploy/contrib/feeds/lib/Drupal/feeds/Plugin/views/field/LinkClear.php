<?php

/**
 * @file
 * Contains \Drupal\feeds\Plugin\views\field\LinkClear.
 */

namespace Drupal\feeds\Plugin\views\field;

use Drupal\views\ResultRow;

/**
 * Field handler to present a feed clear link.
 *
 * @ingroup views_field_handlers
 *
 * @PluginID("feeds_feed_link_clear")
 */
class LinkClear extends Link {

  /**
   * Renders the link.
   */
  protected function renderLink($feed, ResultRow $values) {
    // Ensure user has access to edit this feed.
    if (!$feed->access('clear')) {
      return;
    }

    $this->options['alter']['make_link'] = TRUE;
    $this->options['alter']['path'] = 'feed/' . $feed->id() . '/clear';
    $this->options['alter']['query'] = drupal_get_destination();

    $text = !empty($this->options['text']) ? $this->options['text'] : t('delete items');
    return $text;
  }

}
