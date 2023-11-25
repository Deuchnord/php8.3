<?php

namespace Deuchnord\Php83Demo\Space;

class Galaxy extends SpaceObject
{
    public function getParent(): Universe
    {
        return $this->universe;
    }
}
