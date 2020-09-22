<?php declare(strict_types=1);

namespace vso\vsoutils\typeutils;

/**
 *
 * @author jacob
 *
 */
class TypeUtils
{

    /**
     * isClosure
     *
     * @param [mixed] $suspectedClosure
     * @return boolean
     */
    public function isClosure($suspectedClosure)
    {
        $reflection = new \ReflectionFunction($suspectedClosure);
        return (bool) $reflection->isClosure();
    }
}
