<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

class Request extends BaseGlobal implements  InterfaceGlobals
{

    public function put($key, $value)
    {
        $this->innerPut($_REQUEST, $key, $value);
    }

    public function get($key)
    {
        return $this->innerGet($_REQUEST, $key);
    }

    public function forget($key)
    {
        $this->innerForget($_REQUEST, $key);
    }
}
