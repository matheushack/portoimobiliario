<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 14:24
 */

namespace MatheusHack\PortoImobiliario\Requests;


/**
 * Class DocumentoRequest
 * @package MatheusHack\PortoImobiliario\Requests
 */
class DocumentoRequest
{
    /**
     * @var
     */
    private $calculo;

    /**
     * @return mixed
     */
    public function getCalculo()
    {
        return $this->calculo;
    }

    /**
     * @param mixed $calculo
     * @return DocumentoRequest
     */
    public function setCalculo($calculo)
    {
        $this->calculo = $calculo;
        return $this;
    }
}