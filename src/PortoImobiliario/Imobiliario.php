<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:07
 */

namespace MatheusHack\PortoImobiliario;


use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;
use MatheusHack\PortoImobiliario\Services\ServicePpwEmissaoImobiliaria;

class Imobiliario
{
    public function executarCalculoProduto(ExecutarCalculoProdutoRequest $request)
    {
        $service = new ServicePpwEmissaoImobiliaria();
        return $service->executarCalculoProduto($request);
    }

    public function executarCalculoItemProduto($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->executarCalculoItemProduto($request);
	}

	public function criarProposta($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->criarProposta($request);
	}

	public function buscarDadosApoliceEndosso($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->buscarDadosApoliceEndosso($request);
	}

	public function buscarDadosApoliceRenovacao($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->buscarDadosApoliceRenovacao($request);
	}

	public function buscarDadosItem($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->buscarDadosItem($request);
	}

	public function reentrarProposta($request)
	{
		$service = new ServicePpwEmissaoImobiliaria();
		return $service->reentrarProposta($request);
	}

}