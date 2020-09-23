<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

use InvalidArgumentException;

class Request
{

    public static function put($key, $value)
    {
        if (!is_string($key) && !is_numeric($key)) {
            throw new InvalidArgumentException(
                'Expecting a string  or integer index in ' . __CLASS__ . '::' . __METHOD__
            );
        }
        $_REQUEST[$key] = $value;
    }

    public static function get($key)
    {
        if (!is_string($key) && !is_numeric($key)) {
            throw new InvalidArgumentException(
                'Expecting a string  or integer index in ' . __CLASS__ . '::' . __METHOD__
            );
        }
        return (array_key_exists($key, $_REQUEST) ? $_REQUEST[$key] : null);
    }

    public static function forget($key)
    {
        if ((is_string($key) || is_numeric($key)) && array_key_exists($key, $_REQUEST)) {
            unset($_REQUEST[$key]);
        }
    }
}