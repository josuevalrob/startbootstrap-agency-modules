<?php

namespace Drupal\twig_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "footer",
 *   admin_label = @Translation("footer agency"),
 *	 category = @Translation("twig_block") * )
 */

class footer extends BlockBase {

    public function build() {
        return array(
            '#theme' => 'footer',
            '#title' => '',
            '#description' => ''
        );
   }

}