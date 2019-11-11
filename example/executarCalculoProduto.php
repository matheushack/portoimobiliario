<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:43
 */
require_once('../vendor/autoload.php');

use MatheusHack\PortoImobiliario\Imobiliario;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\DocumentoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\CalculoRequest;
use MatheusHack\PortoImobiliario\Requests\PpwEmissaoImobiliaria\ExecutarCalculoProdutoRequest;

try {
    $calculo = (new CalculoRequest)
        ->setNumeroCalculo(100004280)
        ->setCodigoCanal(13)
        ->setProduto(139)
        ->setPropnom('PEDRO PORTO')
        ->setTiplgd('R')
        ->setLgd('Eugênio de Almeida')
        ->setNumlgd(11)
        ->setBrr('Vl Constança')
        ->setCid('São Paulo')
        ->setUf('SP')
        ->setCependseg('03755-020')
        ->setCependsegNumero('03755')
        ->setCependsegComplemento('020')
        ->setCependsegPesqcepespecial('S');

    $documento = (new DocumentoRequest)
        ->setCalculo($calculo);

    $executarCalculoProdutoRequest = (new ExecutarCalculoProdutoRequest)
        ->setDocumento($documento);

    $imobiliario = new Imobiliario();
    $response = $imobiliario->executarCalculoProduto($executarCalculoProdutoRequest);

    dd($response);
}catch (Exception $e){
    dd($e->getMessage());
}catch (TypeError $e){
    dd($e->getMessage());
}