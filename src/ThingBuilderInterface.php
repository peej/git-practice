<?php

declare(strict_types=1);

interface ThingBuilderInterface
{
    public function build(int $thingType): Thing;
}
