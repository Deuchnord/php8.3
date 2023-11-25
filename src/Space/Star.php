<?php

namespace Deuchnord\Php83Demo\Space;

class Star extends SpaceObject
{
    public function __construct(Universe $universe, string $name, protected readonly Galaxy $parent)
    {
        parent::__construct($universe, $name);
    }

    public function getParent(): Galaxy
    {
        return $this->parent;
    }
}
