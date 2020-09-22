<?php declare(strict_types=1);

namespace vso\vsoutils\stringutils;

/**
 * StringUtils
 *
 * @author undercoder
 *
 */
class StringUtils
{

    /**
     * toCamelCase
     *
     * @param string $string
     * @return string
     */
    public function toCamelCase(string $string) : string
    {
        $result  = strtolower($string);
        $matches = [];
        preg_match_all('/_[a-z]/', $result, $matches);
        foreach ($matches[0] as $match) {
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }

        return $result;
    }
}
