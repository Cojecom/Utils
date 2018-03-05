<?php

namespace Cojecom\Utils\Exception;


class MissingKeysException extends \Exception
{
    private $missingKeys;
    
    public function __construct(array $missingKeys,$message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct(self::generateMessage($message,$missingKeys), $code, $previous);
        $this->missingKeys = $missingKeys;
    }
    
    private static function generateMessage(string $message,array $missingKeys):string{
        $readableMissingKeys = 'Missing keys : [';
        $firstLoop = true;
        foreach($missingKeys as $missingKey){
            if(!$firstLoop){
                $readableMissingKeys .= ',';
            }
            $firstLoop = false;
            $readableMissingKeys .= $missingKey;
        }
        $readableMissingKeys .= ']';
        return $message . PHP_EOL . $readableMissingKeys;
    }
    
}