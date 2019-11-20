<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 20/11/19
 * Time: 09:18
 */

require_once('../vendor/autoload.php');

use MatheusHack\PortoImobiliario\Imobiliario;

try {
	$imobiliario = new Imobiliario();
	$response = $imobiliario->reentrarProposta([]);

	dd($response);
}catch (Exception $e){
	dd($e->getMessage());
}catch (TypeError $e){
	dd($e->getMessage());
}