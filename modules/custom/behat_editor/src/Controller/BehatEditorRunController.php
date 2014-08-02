<?php
/**
 * Created by PhpStorm.
 * User: alfrednutile
 * Date: 7/21/14
 * Time: 7:26 AM
 */

namespace Drupal\behat_editor\Controller;

use Drupal\behat_editor\Helpers\BehatResponseWrapper;
use Drupal\Core\Access\CsrfTokenGenerator;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Request;


class BehatEditorRunController extends ControllerBase {
    use BehatResponseWrapper;

    /**
     * The CSRF token generator.
     *
     * @var \Drupal\Core\Access\CsrfTokenGenerator
     */
    protected $csrfToken;

    /**
     * Constructs a RouteProcessorCsrf object.
     *
     * @param \Drupal\Core\Access\CsrfTokenGenerator $csrf_token
     *   The CSRF token generator.
     */
    function __construct(CsrfTokenGenerator $csrf_token = null) {
        $this->csrfToken = $csrf_token;
    }

    public function run($repo_setting_id, $filename, Request $request)
    {

        var_dump($request->query->get('fooq'));
        var_dump($request->getMethod());
        var_dump($request->request->get('foo'));

        $user = \Drupal::currentUser();
        var_dump($user->getEmail());
        $token = \Drupal::csrfToken()->get();
        var_dump($token);
        $output = array($repo_setting_id,$filename);
        return $this->response_json($user->getAccount(), 200);
    }

    public function jobPut($repo_setting_id, $filename, Request $request)
    {
        var_dump($request->query->get('fooq'));
        var_dump($request->getMethod());
        var_dump($request->request->get('foo'));

        $user = \Drupal::currentUser();
        var_dump($user->getEmail());
        $token = \Drupal::csrfToken()->get();
        var_dump($token);
        $output = array($repo_setting_id,$filename);
        return $this->response_json($output, 200);
    }
} 