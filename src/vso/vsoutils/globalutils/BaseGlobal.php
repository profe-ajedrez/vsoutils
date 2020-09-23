<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

abstract class BaseGlobal
{

    public function innerPut(&$global, $key, $value)
    {
        if (!is_string($key) && !is_numeric($key)) {
            throw new \InvalidArgumentException(
                'Expecting a string  or integer index in ' . __CLASS__ . '::' . __METHOD__
            );
        }
        $global[$key] = $value;
    }

    public function innerGet(&$global, $key)
    {
        if (!is_string($key) && !is_numeric($key)) {
            throw new \InvalidArgumentException(
                'Expecting a string  or integer index in ' . __CLASS__ . '::' . __METHOD__
            );
        }
        return (array_key_exists($key, $global) ? $global[$key] : null);
    }

    public function innerForget(&$global, $key)
    {
        if ((is_string($key) || is_numeric($key)) && array_key_exists($key, $global)) {
            unset($global[$key]);
        }
    }
}
