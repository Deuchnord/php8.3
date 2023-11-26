<?php

namespace Deuchnord\Php83Demo\Space;

class VisibleUniverse extends Universe
{
    public const int ANSWER = 24;

    #[\Override]
    public function getAnswer(): int
    {
        return self::ANSWER * 2;
    }
}
