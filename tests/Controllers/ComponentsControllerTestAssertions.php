<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Component;

final class ComponentsControllerTestAssertions
{
    public function __construct(private ComponentsControllerTest $testCase)
    {
    }

    public function assertComponentCreated(Component $component, Component $expectedComponent): void
    {
        $this->testCase::assertEquals($expectedComponent, $component);
    }
}
