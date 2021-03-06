<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

class Get extends BaseGlobal implements  InterfaceGlobals
{

    public function put($key, $value)
    {
        $this->innerPut($_GET, $key, $value);
    }

    public function get($key)
    {
        return $this->innerGet($_GET, $key);
    }

    public function forget($key)
    {
        $this->innerForget($_GET, $key);
    }
}
