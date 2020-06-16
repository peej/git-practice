<?php

declare(strict_types=1);

class ThingBuilder implements ThingBuilderInterface
{
    public function build(int $thingType): Thing
    {
        $thing = new Thing();

        $thing->name = 'Default name';
        $thing->type = $thingType;

        return $thing;
    }
}
