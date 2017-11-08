<?php

namespace Drupal\twig_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "services",
 *   admin_label = @Translation("services"),
 *	 category = @Translation("twig_block") * )
 */

class services extends BlockBase {

    public function build() {
        return array(
            '#theme' => 'services',
            '#title' => '',
            '#description' => ''
        );
   }

}