<?php
namespace Drupal\cern_plugins;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\cern_plugins\Annotation\CERNipsum;
/**
 * Provides the plugin manager for CERNipsum plugins.
 */
class CERNipsumPluginManager extends DefaultPluginManager {
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    $subdir = 'Plugin/CERNipsum';
    $plugin_interface = CERNipsumInterface::class;
    $plugin_definition_annotation_name = CERNipsum::class;
    parent::__construct($subdir, $namespaces, $module_handler, $plugin_interface, $plugin_definition_annotation_name);

  }
}