<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/09/2025
 * Time: 11:33 AM
 */

namespace droidevs\phpmvc\middlewares;


use droidevs\phpmvc\Application;
use droidevs\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}