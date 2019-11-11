<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 20/09/19
 * Time: 13:50
 */

namespace MatheusHack\PortoImobiliario\Entities;


/**
 * Class PortoResponse
 * @package MatheusHack\PortoImobiliario\Entities
 */
class PortoResponse
{
    /**
     * @var
     */
    public $success;

    /**
     * @var
     */
    public $message;

    /**
     * @var
     */
    public $data;

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     * @return PortoResponse
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return PortoResponse
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return PortoResponse
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}