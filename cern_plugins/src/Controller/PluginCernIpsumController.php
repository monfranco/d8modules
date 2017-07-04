<?php

namespace Drupal\cern_plugins\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\cern_plugins\CERNipsumPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for our example pages.
 */
class PluginCernIpsumController extends ControllerBase {

  protected $cernipsum;
  public function __construct(CERNipsumPluginManager $cernipsum) {
    $this->cernipsum = $cernipsum;
  }
  public static function create(ContainerInterface $container) {
    return new static($container->get('plugin.manager.cernipsum'));
  }
  public function cernipsum() { 
    $lorem_ipsum = $this->cernipsum->createInstance('lorem_ipsum');
    $build['cernipsum_lorem_ipsum_title'] = ['#markup' => '<h2>' . $lorem_ipsum->description() . '</h2>',];
    $build['cernipsum_lorem_ipsum_text'] = ['#markup' => '<p>' . $lorem_ipsum->generate(15000) . '</p>',];
    return $build;
  }
}