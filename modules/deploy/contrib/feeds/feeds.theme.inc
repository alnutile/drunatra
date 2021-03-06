<?php

/**
 * @file
 * Theme functions for feeds.
 */

/**
 * Themes a status display for a source.
 */
function theme_feeds_feed_status($v) {
  $output = '<div class="info-box feeds-source-status">';
  $items = array();
  if ($v['progress_importing']) {
    $progress = number_format(100.0 * $v['progress_importing'], 0);
    $items[] = t('Importing - @progress % complete.', array('@progress' => $progress));
  }
  if ($v['progress_clearing']) {
    $progress = number_format(100.0 * $v['progress_clearing'], 0);
    $items[] = t('Deleting items - @progress % complete.', array('@progress' => $progress));
  }
  if (!count($items)) {
    if ($v['count']) {
      if ($v['imported']) {
        $items[] = t('Last import: @ago ago.', array('@ago' => format_interval(REQUEST_TIME - $v['imported'], 1)));
      }
      $items[] = t('@count imported items total.', array('@count' => $v['count']));
    }
    else {
      $items[] = t('No imported items.');
    }
  }
  $output .= theme('item_list', array('items' => $items));
  $output .= '</div>';
  return $output;
}
