<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/02/2025
 * Time: 8:43 AM
 */

namespace droidevs\phpmvc;

use droidevs\phpmvc\middlewares\BaseMiddleware;
/**
 * Class Controller
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \droidevs\phpmvc\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \droidevs\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}