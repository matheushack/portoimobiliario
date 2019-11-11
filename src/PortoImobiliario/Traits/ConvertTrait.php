<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 14:10
 */

namespace MatheusHack\PortoImobiliario\Traits;


/**
 * Trait ConvertTrait
 * @package MatheusHack\PortoImobiliario\Traits
 */
trait ConvertTrait
{
    /**
     * @return array
     */
    public function toArray()
    {
        $array = (array) get_object_vars($this);
        return array_filter($array);
    }
}