<?php

namespace Drupal\twig_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "contact",
 *   admin_label = @Translation("Contact header"),
 *	 category = @Translation("twig_block") * )
 */

class contact extends BlockBase {

    public function build() {
        return array(
            '#theme' => 'contact',
            '#title' => '',
            '#description' => ''
        );
   }

}