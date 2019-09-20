<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:07
 */

namespace MatheusHack\PortoImobiliario;

use MatheusHack\PortoImobiliario\Services\ServiceBuscaDadosApoliceEndosso;
use MatheusHack\PortoImobiliario\Services\ServiceBuscaDadosApoliceRenovacao;
use MatheusHack\PortoImobiliario\Services\ServiceBuscaDadosItem;
use MatheusHack\PortoImobiliario\Services\ServiceCalculoProduto;
use MatheusHack\PortoImobiliario\Services\ServiceCriarProposta;
use MatheusHack\PortoImobiliario\Services\ServiceImpressao;
use MatheusHack\PortoImobiliario\Services\ServiceReentrarProposta;

/**
 * Class Imobiliario
 * @package MatheusHack\PortoImobiliario
 */
class Imobiliario
{
    /**
     * @param $request
     * @return mixed|void
     */
    public function calculoProduto($request)
    {
        $service = new ServiceCalculoProduto();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function criarProposta($request)
    {
        $service = new ServiceCriarProposta();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function buscaDadosApoliceEndosso($request)
    {
        $service = new ServiceBuscaDadosApoliceEndosso();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function buscaDadosApoliceRenovacao($request)
    {
        $service = new ServiceBuscaDadosApoliceRenovacao();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function buscaDadosItem($request)
    {
        $service = new ServiceBuscaDadosItem();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function reentrarProposta($request)
    {
        $service = new ServiceReentrarProposta();
        return $service->handle($request);
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function impressao($request)
    {
        $service = new ServiceImpressao();
        return $service->handle($request);
    }

}