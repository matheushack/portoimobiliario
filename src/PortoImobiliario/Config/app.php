<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 11:09
 */
try {
    $dotenv = Dotenv\Dotenv:: create($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
}catch (Exception $e){}