<?php
namespace Drupal\cern_plugins;
use Drupal\Component\Plugin\PluginBase;
abstract class CERNipsumBase extends PluginBase implements CERNipsumInterface {
  public function description() {
    return $this->pluginDefinition['description'];
  }
  abstract public function generate($length);
}
