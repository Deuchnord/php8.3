<?php

namespace Deuchnord\Php83Demo\Exception;

class InvalidDateTimeException extends \Exception
{
    public function __construct(string $invalidString)
    {
        parent::__construct("Invalid DateTime string value: $invalidString.");
    }
}
