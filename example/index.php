<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 30/08/19
 * Time: 17:43
 */
require_once('../vendor/autoload.php');

use MatheusHack\PortoImobiliario\Imobiliario;
use MatheusHack\PortoImobiliario\Requests\CriarPropostaRequest;

try {
    $dados = [
        'matheus' => 'hack',
        'elaine' => 'diniz'
    ];

    $imobiliario = new Imobiliario();
    $response = $imobiliario->calculoProduto($dados);

    echo "<pre>";var_dump($response);exit;
}catch (Exception $e){
    echo "<pre>";var_dump($e->getMessage());exit;
}