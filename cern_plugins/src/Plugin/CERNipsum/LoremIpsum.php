<?php
namespace Drupal\cern_plugins\Plugin\CERNipsum;
use Drupal\cern_plugins\CERNipsumBase;
/**
 * Provides a LoremIpsum text.
 *
 * @CERNipsum(
 * id = "lorem_ipsum",
 * description = @Translation("Lorem Ipsum text")
 * )
 */
class LoremIpsum extends CERNipsumBase {
  
  public function generate($length = 100) {
    return substr(file_get_contents('http://loripsum.net/api/1/verylong/plaintext'), 0,   $length) . '.';
  }
}
