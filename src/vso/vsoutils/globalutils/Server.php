<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

class Server extends BaseGlobal implements InterfaceGlobals
{

    public function put($key, $value)
    {
        $this->innerPut($_SERVER, $key, $value);
    }

    public function get($key)
    {
        return $this->innerGet($_SERVER, $key);
    }

    public function forget($key)
    {
        $this->innerForget($_SERVER, $key);
    }
}
