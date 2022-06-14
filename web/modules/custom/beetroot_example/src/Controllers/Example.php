<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\Core\Controller\ControllerBase;    
// use Drupal\node\Entity\Node;
// use Symfony\Component\HttpFoundation\JsonResponse;

class Example extends ControllerBase {

    public function view() {
            return array(
                    '#title' => 'Hello World!',
                    '#markup' => 'Here is some content.',
                );
    }
}