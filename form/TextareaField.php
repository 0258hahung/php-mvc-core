<?php
/**
 * User: OUMOUS Mouad
 * Date: 10/10/2025
 * Time: 3:49 PM
 */

namespace droidevs\phpmvc\form;


/**
 * Class TextareaField
 *
 * @author  Mouad OUMOUS <mouadoumous@gmail.com>
 * @package droidevs\phpmvc\form
 */
class TextareaField extends BaseField
{
    public function renderInput()
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>',
             $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}