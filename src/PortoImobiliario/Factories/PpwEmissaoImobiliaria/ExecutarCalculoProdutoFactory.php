<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 13:49
 */

namespace MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria;

use Cake\Utility\Xml;
use MatheusHack\PortoImobiliario\Entities\PortoResponse;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;

/**
 * Class ExecutarCalculoProdutoFactory
 * @package MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria
 */
class ExecutarCalculoProdutoFactory
{
	/**
	 * @param ExecutarCalculoProdutoRequest $request
	 * @return array
	 */
	public function request(ExecutarCalculoProdutoRequest $request)
    {
        $body = Xml::fromArray([
        	'documento' => [
        		'calculo' => $request->getDocumento()
					->getCalculo()
					->toArray()
			]
		])->asXML();

        return [
            'executarCalculoProdutoRequest' => [
                'executarCalculoProdutoRequest' => $body
			]
		];
    }

	/**
	 * @param $response
	 * @return PortoResponse
	 * @throws \Exception
	 */
	public function response($response)
    {
		if(!$response->executarCalculoProdutoReturn)
			throw new \Exception('Não obteve retorno do webservice da Porto Seguro');

		$response = Xml::toArray(Xml::build($response->executarCalculoProdutoReturn));

		if(!empty($response['retornoCalculo']['coderro']))
			throw new \Exception($response['retornoCalculo']['aceitacao']['mensagem']);

		return (new PortoResponse)->setSuccess(true)
			->setData(json_decode(json_encode($response['retornoCalculo'])));
    }
}