<?php

namespace Deuchnord\Php83Demo\Space;

abstract class SpaceObject
{
    public function __construct(
        public Universe $universe,
        public string $name,
    ) {
    }

    abstract public function getParent();
}
