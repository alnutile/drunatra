<?php
/**
 * Created by PhpStorm.
 * User: alfrednutile
 * Date: 7/21/14
 * Time: 7:24 AM
 */

namespace Drupal\behat_editor\Controller;


use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class BehatEditorAdmin extends ControllerBase {


    public function intro() {
        return array(
            '#markup' => '<p>' . t('Coming Soon...') . '</p>',
        );
    }


} 