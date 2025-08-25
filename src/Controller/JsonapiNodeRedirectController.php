<?php

namespace Drupal\drupalmodule\Controller;

use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class JsonapiNodeRedirectController {
  public function go(NodeInterface $node): RedirectResponse {
    $path = '/jsonapi/node/' . $node->bundle() . '/' . $node->uuid();
    return new RedirectResponse($path, 302);
  }
}
