<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

class Session extends BaseGlobal implements InterfaceGlobals
{

    public function put($key, $value)
    {
        $this->innerPut($_SESSION, $key, $value);
    }

    public function get($key)
    {
        return $this->innerGet($_SESSION, $key);
    }

    public function forget($key)
    {
        $this->innerForget($_SESSION, $key);
    }
}
