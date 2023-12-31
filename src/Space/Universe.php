<?php

namespace Deuchnord\Php83Demo\Space;

use Deuchnord\Php83Demo\Exception\InvalidDateTimeException;

class Universe
{
    public const ANSWER = 42;

    public function getAnswer(): int
    {
        return self::ANSWER;
    }

    public function getDateTime(string $str): \DateTimeInterface
    {
        try {
            return new \DateTimeImmutable($str);
        } catch (\Exception $e) {
            throw new InvalidDateTimeException($str);
        }
    }
}
