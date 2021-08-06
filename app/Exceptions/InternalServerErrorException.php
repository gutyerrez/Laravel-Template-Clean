<?php

namespace App\Exceptions;

use Exception;

class InternalServerErrorException extends Exception
{

    function __construct(Int $code, String $message)
    {
        parent::__construct($message, $code);
    }

}
