<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 13:51
 */

namespace MatheusHack\PortoImobiliario\Services;


use MatheusHack\PortoImobiliario\Soap\Client;
use MatheusHack\PortoImobiliario\Entities\ServiceInterface;

/**
 * Class ServiceBuscaDadosApoliceEndosso
 * @package MatheusHack\PortoImobiliario\Services
 */
class ServiceBuscaDadosApoliceEndosso extends Client implements ServiceInterface
{
    /**
     * @param $request
     * @return mixed|void
     */
    public function handle($request)
    {
        // TODO: Implement handle() method.
        try{
            $response = parent::__soapCall('buscaDadosApoliceEndosso',$request);
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
        // TODO: Implement makeResponse() method.
    }
}