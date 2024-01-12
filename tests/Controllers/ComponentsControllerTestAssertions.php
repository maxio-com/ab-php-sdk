<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Component;

final class ComponentsControllerTestAssertions
{
    public function __construct(private ComponentsControllerTest $testCase)
    {
    }

    public function assertQuantityBasedComponentCreated(Component $component, Component $expectedComponent): void
    {
        $expectedComponentJson = $expectedComponent->jsonSerialize();
        $componentJson = $component->jsonSerialize();

        // Removed because of modifying value on read.
        unset($expectedComponentJson['updated_at']);
        unset($componentJson['updated_at']);

        $this->testCase::assertEquals($expectedComponentJson, $componentJson);
    }

    public function assertOnOffComponentCreated(Component $component, Component $expectedComponent): void
    {
        $expectedComponentJson = $expectedComponent->jsonSerialize();
        $componentJson = $component->jsonSerialize();

        // Removed because of modifying value on read.
        unset($expectedComponentJson['updated_at']);
        unset($componentJson['updated_at']);

        $this->testCase::assertEquals($expectedComponentJson, $componentJson);
    }
}
