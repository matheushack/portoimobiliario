<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/19
 * Time: 13:55
 */

namespace MatheusHack\PortoImobiliario\Entities;


/**
 * Interface FactoryInterface
 * @package MatheusHack\PortoImobiliario\Entities
 */
interface ServiceInterface
{
    /**
     * @return mixed
     */
    public function handle($request);

    /**
     * @return mixed
     */
    public function makeResponse($response);
}