<?php
namespace Drupal\cern_plugins;
/**
 * Interface for all CERNipsum type plugins.
 */
interface CERNipsumInterface {
 public function description();
 public function generate($length);
}
