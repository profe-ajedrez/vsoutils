<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

class Post extends BaseGlobal implements  InterfaceGlobals
{

    public function put($key, $value)
    {
        $this->innerPut($_POST, $key, $value);
    }

    public function get($key)
    {
        return $this->innerGet($_POST, $key);
    }

    public function forget($key)
    {
        $this->innerForget($_POST, $key);
    }
}
