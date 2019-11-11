<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 13:49
 */

namespace MatheusHack\PortoImobiliario\Factories\PpwEmissaoImobiliaria;

use Cake\Utility\Xml;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;

class ExecutarCalculoProdutoFactory
{
    public function request(ExecutarCalculoProdutoRequest $request)
    {
        $calculo = $request->getDocumento()
                ->getCalculo()
                ->toArray();

        $xmlContent = Xml::fromArray(['documento' => $calculo], [
            'enconding' => null,
            'return' => 'domdocument'
        ]);

        dd($xmlContent);

        $cdata = new \SoapVar($xmlContent, XSD_STRING);

        return [
            'executarCalculoProdutoRequest' => [
                'executarCalculoProdutoRequest' => $cdata
            ]
        ];
    }

    public function response($response)
    {
        dd($response);
    }
}