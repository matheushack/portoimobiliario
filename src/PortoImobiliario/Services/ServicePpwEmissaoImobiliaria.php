<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 10:57
 */

namespace MatheusHack\PortoImobiliario\Services;

use MatheusHack\PortoImobiliario\Entities\PortoResponse;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\BuscarDadosApoliceEndossoFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\BuscarDadosApoliceRenovacaoFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\BuscarDadosItemFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\CriarPropostaFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\ExecutarCalculoItemProdutoFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\ExecutarCalculoProdutoFactory;
use MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria\ReentrarPropostaFactory;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;
use MatheusHack\PortoImobiliario\Soap\Client;

class ServicePpwEmissaoImobiliaria extends Client
{
    function __construct()
    {
        parent::__construct(getenv('PORTO_IMOBILIARIA_PPW_EMISSAO_WSDL'));
    }

	/**
	 * @param ExecutarCalculoProdutoRequest $request
	 * @return PortoResponse
	 */
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

	public function executarCalculoItemProduto($request)
	{
		$executarCalculoItemProduto = new ExecutarCalculoItemProdutoFactory();

		try{
			$response = $this->__soapCall('executarCalculoItemProduto',
				$executarCalculoItemProduto->request($request)
			);

			return $executarCalculoItemProduto->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	public function criarProposta($request)
	{
		$criarProposta = new CriarPropostaFactory();

		try{
			$response = $this->__soapCall('criarProposta',
				$criarProposta->request($request)
			);

			return $criarProposta->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	public function buscarDadosApoliceEndosso($request)
	{
		$buscarDadosApoliceEndosso = new BuscarDadosApoliceEndossoFactory();

		try{
			$response = $this->__soapCall('buscarDadosApoliceEndosso',
				$buscarDadosApoliceEndosso->request($request)
			);

			return $buscarDadosApoliceEndosso->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	public function buscarDadosApoliceRenovacao($request)
	{
		$buscarDadosApoliceRenovacao = new BuscarDadosApoliceRenovacaoFactory();

		try{
			$response = $this->__soapCall('buscarDadosApoliceRenovacao',
				$buscarDadosApoliceRenovacao->request($request)
			);

			return $buscarDadosApoliceRenovacao->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	public function buscarDadosItem($request)
	{
		$buscarDadosItem = new BuscarDadosItemFactory();

		try{
			$response = $this->__soapCall('buscarDadosItem',
				$buscarDadosItem->request($request)
			);

			return $buscarDadosItem->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}

	public function reentrarProposta($request)
	{
		$reentrarProposta = new ReentrarPropostaFactory();

		try{
			$response = $this->__soapCall('reentrarProposta',
				$reentrarProposta->request($request)
			);

			return $reentrarProposta->response($response);
		} catch(\SoapFault $SoapFault) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($SoapFault->getMessage());
		} catch (\Exception $e) {
			return (new PortoResponse)->setSuccess(false)
				->setMessage($e->getMessage());
		}
	}
}