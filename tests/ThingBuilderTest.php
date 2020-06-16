<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ThingBuilderTest extends TestCase
{
    public function testBuildingAThing(): void
    {
        $thingBuilder = new ThingBuilder();

        $thing = $thingBuilder->build(1);

        $this->assertEquals(1, $thing->type);
    }
}
