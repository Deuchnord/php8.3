<?php

namespace Deuchnord\Php83Demo\Space;

use Random\Randomizer;

class BizarroUniverse extends Universe
{
    private Randomizer $randomizer;

    public function __construct()
    {
        $this->randomizer = new Randomizer();
    }

    public function getAnswer(): int
    {
        return $this->randomizer->getInt(0, 200);
    }
}
