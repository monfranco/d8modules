<?php

namespace Drupal\cern_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CERN: simple block' block.
 *
 * @Block(
 *   id = "cern_simple_block",
 *   admin_label = @Translation("CERN: simple block")
 * )
 */
class CERNSimpleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t("This is the CERN Simple Block"),
    );
  } 

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
	return [
	'label' => 'Custom Title',
	'label_display' => FALSE,
	];
  }
}
