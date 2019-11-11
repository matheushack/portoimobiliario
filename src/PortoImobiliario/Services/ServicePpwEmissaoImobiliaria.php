<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 10:57
 */

namespace MatheusHack\PortoImobiliario\Services;

use MatheusHack\PortoImobiliario\Entities\PortoResponse;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\ExecutarCalculoProdutoFactory;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;
use MatheusHack\PortoImobiliario\Soap\Client;

class ServicePpwEmissaoImobiliaria extends Client
{
    function __construct()
    {
        parent::__construct(getenv('PORTO_IMOBILIARIA_PPW_EMISSAO_WSDL'));
    }

    public function executarCalculoProduto(ExecutarCalculoProdutoRequest $request)
    {
        $executarCalculoProduto = new ExecutarCalculoProdutoFactory();

        try{
            $response = $this->__soapCall('executarCalculoProduto',
                $executarCalculoProduto->request($request)
            );
            return $executarCalculoProduto->response($response);

        } catch(\SoapFault $SoapFault) {
            return (new PortoResponse)->setSuccess(false)
                ->setMessage($SoapFault->getMessage());
        } catch (\Exception $e) {
            return (new PortoResponse)->setSuccess(false)
                ->setMessage($e->getMessage());
        }
    }
}