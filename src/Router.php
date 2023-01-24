<?php

namespace SON;

class Router implements \ArrayAccess {

    private $container = array();

    public function __construct(array $routes)
    {
        $this->container = $routes;
    }



    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public function handler()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';

        if(strlen($path) > 1)
        {
            $path = rtrim($path,'/');
        }

        if ($this->offsetExists($path)){
            return $this->offsetGet($path);
        }

        http_response_code(404);
        echo 'Página Inexistente ';

        exit;
    }

}