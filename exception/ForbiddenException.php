<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/08/2025
 * Time: 11:35 AM
 */

namespace droidevs\phpmvc\exception;


use droidevs\phpmvc\Application;

/**
 * Class ForbiddenException
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}