<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/09/2025
 * Time: 11:33 AM
 */

namespace droidevs\phpmvc\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}