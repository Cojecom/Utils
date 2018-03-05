<?php

namespace Cojecom\Utils\Utility;


class MissingKeysException extends \Exception
{
    private $missingKeys;
    
    public function __construct(array $missingKeys,$message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->missingKeys = $missingKeys;
    }
    
}