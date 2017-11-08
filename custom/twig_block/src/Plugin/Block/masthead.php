<?php

namespace Drupal\twig_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "masthead",
 *   admin_label = @Translation("block for an awesome title in your header"),
 *	 category = @Translation("twig_block") * )
 */

class masthead extends BlockBase {

    public function build() {
        return array(
            '#theme' => 'masthead',
            '#title' => '',
            '#description' => ''
        );
   }

}