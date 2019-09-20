<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:13
 */

namespace MatheusHack\PortoImobiliario\Services;

use MatheusHack\PortoImobiliario\Factories\CalculoProdutoRequestFactory;
use MatheusHack\PortoImobiliario\Soap\Client;
use MatheusHack\PortoImobiliario\Entities\ServiceInterface;

/**
 * Class ServiceCalculoProduto
 * @package MatheusHack\PortoImobiliario\Services
 */
class ServiceCalculoProduto extends Client implements ServiceInterface
{
    /**
     * @param $request
     * @return mixed|void
     */
    public function handle($request)
    {
        try{
            $response = parent::__soapCall('executarCalculoProduto',[
                (new CalculoProdutoRequestFactory)->make($request)
            ]);

            return $this->makeResponse($response);

        } catch(\SoapFault $SoapFault) {
            throw new Exception($SoapFault->getMessage());
        }
    }

    /**
     * @param $response
     * @return mixed|void
     */
    public function makeResponse($response)
    {
    }
}