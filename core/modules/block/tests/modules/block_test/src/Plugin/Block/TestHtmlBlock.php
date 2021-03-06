<?php

/**
 * @file
 * Contains \Drupal\block_test\Plugin\Block\TestHtmlBlock.
 */

namespace Drupal\block_test\Plugin\Block;

use Drupal\block\BlockBase;

/**
 * Provides a block to test HTML.
 *
 * @Block(
 *   id = "test_html",
 *   admin_label = @Translation("Test HTML block")
 * )
 */
class TestHtmlBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#attributes' => \Drupal::state()->get('block_test.attributes'),
      '#children' => \Drupal::state()->get('block_test.content'),
    );
  }

}
