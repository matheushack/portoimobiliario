<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 14:09
 */

namespace MatheusHack\PortoImobiliario\Services;

use MatheusHack\PortoImobiliario\Soap\Client;
use MatheusHack\PortoImobiliario\Entities\ServiceInterface;

/**
 * Class ServiceBuscaDadosItem
 * @package MatheusHack\PortoImobiliario\Services
 */
class ServiceBuscaDadosItem extends Client implements ServiceInterface
{
    /**
     * @param $request
     * @return mixed|void
     */
    public function handle($request)
    {
        try{
            $response = parent::__soapCall('buscaDadosItem',$request);
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