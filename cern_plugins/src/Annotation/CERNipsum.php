<?php
namespace Drupal\cern_plugins\Annotation;
use Drupal\Component\Annotation\Plugin;
/**
 * Defines a CERNipsum annotation object.
 *
 * @see \Drupal\cern_plugins\CERNipsumPluginManager
 * @see plugin_api
 *
 * @Annotation
 */
class cernipsum extends Plugin {
  /**
   * The plugin ID.
   *
   * @var string
  */
  public $id;
  /**
   * The description of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description;
}
