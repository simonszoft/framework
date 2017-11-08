<?php

namespace App\Modules\Fields\Fields;

use App\Modules\Fields\Fields\Field;


class DoubleField extends Field
{
    /**
     * Parse & return the meta item value.
     *
     * @return int
     */
    public function get()
    {
        return doubleval(parent::get());
    }

    /**
     * Parse & set the meta item value.
     *
     * @param int $value
     */
    public function set($value)
    {
        parent::set(doubleval($value));
    }

    /**
     * Ascertain whether we can handle the Field of variable passed.
     *
     * @param  mixed  $value
     * @return bool
     */
    public function isField($value)
    {
        return is_double($value);
    }

    /**
     * Output value to string.
     *
     * @return string
     */
    public function toString()
    {
        return (string) $this->get();
    }

    /**
     * Output value to string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}
