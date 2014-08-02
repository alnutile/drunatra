<?php
/**
 * Created by PhpStorm.
 * User: alfrednutile
 * Date: 7/21/14
 * Time: 8:43 AM
 */

namespace Drupal\behat_editor\Helpers;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait BehatResponseWrapper {

    public function response_json($output, $code, $headers = null)
    {
        if ($headers == null) {
            $headers = [
                'Content-Type' => 'application/json'
            ];
        }
        return new JsonResponse($output, $code, $headers);
    }
} 