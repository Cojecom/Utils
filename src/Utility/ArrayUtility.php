<?php
/**
 * Created by PhpStorm.
 * User: Cojecom-Dev
 * Date: 05/03/2018
 * Time: 05:20 PM
 */

namespace Cojecom\Utils\Utility;
use Cojecom\Utils\Exception\MissingKeysException;

class ArrayUtility
{
    /**
     * @param array $array
     * @param array $keys
     *
     * @return bool
     * @throws \Cojecom\Utils\Exception\MissingKeysException
     */
    public static function arrayHasKeys(array $array,array $keys){
        $missingKeys = [];
        
        foreach($keys as $key){
            if(!array_key_exists($key,$array))
                $missingKeys[] = $key;
        }
        
        if(!empty($missingKeys))
            throw new MissingKeysException($missingKeys);
        
        return true;
    }
}