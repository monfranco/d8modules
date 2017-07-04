/**
* @file
* Contains \Drupal\cern_twig\Controller\TestTwigController.
*/
namespace Drupal\cern_twig\Controller;
use Drupal\Core\Controller\ControllerBase;
class CERNTwigControllerextends ControllerBase{
public function content() {
return [
'#theme' => ‘cern_template',
'#cern_var' => $this->t(‘CERN Value'),
];
}
}