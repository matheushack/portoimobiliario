<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 14:52
 */

namespace MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria;


use MatheusHack\PortoImobiliario\Traits\ConvertTrait;

/**
 * Class ExecutarCalculoProdutoRequest
 * @package MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria
 */
class ExecutarCalculoProdutoRequest
{
    use ConvertTrait;

    /**
     * @var
     */
    public $documento;

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     * @return ExecutarCalculoProdutoRequest
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
        return $this;
    }
}