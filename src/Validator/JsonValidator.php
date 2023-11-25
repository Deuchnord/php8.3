<?php

namespace Deuchnord\Php83Demo\Validator;

class JsonValidator
{
    public function isValid(string $json): bool
    {
        try {
            json_decode($json, flags: JSON_THROW_ON_ERROR);
            return true;
        } catch (\JsonException) {
            return false;
        }
    }
}
