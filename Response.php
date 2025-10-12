<?php
/**
 * User: OUMOUS Mouad
 * Date: 01/10/2025
 * Time: 10:53 AM
 */

namespace droidevs\phpmvc;


/**
 * Class Response
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}