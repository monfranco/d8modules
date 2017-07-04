<?php
/**
  * @file
  * Contains \Drupal\cern_hello\Controller\CERNHelloController.
  */
namespace Drupal\cern_hello\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
  * Controller to return the defined page
  */
class CERNHelloController extends ControllerBase {
  public function hello() {
    return array(
      '#markup' => '<p>' . $this->t('Hello, CERN Team! This is our first module in Drupal 8!') . '</p>',
    );
  }
}
