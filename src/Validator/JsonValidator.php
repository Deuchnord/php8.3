<?php

namespace Deuchnord\Php83Demo\Validator;

class JsonValidator
{
    public function isValid(string $json): bool
    {
        return json_validate($json);
    }
}
