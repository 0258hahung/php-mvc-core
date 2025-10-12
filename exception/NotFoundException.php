<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/08/2025
 * Time: 11:43 AM
 */

namespace droidevs\phpmvc\exception;


/**
 * Class NotFoundException
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}