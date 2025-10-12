<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/08/2025
 * Time: 10:13 AM
 */

namespace droidevs\phpmvc;

use droidevs\phpmvc\db\DbModel;

/**
 * Class UserModel
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}