<?php declare(strict_types=1);

namespace vso\vsoutils\globalutils;

interface InterfaceGlobals
{
    /**
     * put
     *
     * @param [mixed] $key
     * @param [mixed] $value
     * @return void
     * @throws InvalidArgumentException     when $key null
     */
    public function put($key, $value);

    /**
     * get
     *
     * @param [mixed] $key
     * @return mixed
     * @throws InvalidArgumentException     when $key null
     */
    public function get($key);

    /**
     * forget
     *
     * @param [mixed] $key
     * @return void
     * @throws InvalidArgumentException     when $key null 
     */
    public function forget($key);
}
