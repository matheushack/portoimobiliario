<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 20/11/19
 * Time: 09:17
 */

require_once('../vendor/autoload.php');

use MatheusHack\PortoImobiliario\Imobiliario;

try {
	$imobiliario = new Imobiliario();
	$response = $imobiliario->executarCalculoItemProduto([]);

	dd($response);
}catch (Exception $e){
	dd($e->getMessage());
}catch (TypeError $e){
	dd($e->getMessage());
}