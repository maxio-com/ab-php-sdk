<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateEBBComponent;
use AdvancedBillingLib\Models\EBBComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateEBBComponent
 *
 * @see CreateEBBComponent
 */
class CreateEBBComponentBuilder
{
    /**
     * @var CreateEBBComponent
     */
    private $instance;

    private function __construct(CreateEBBComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create ebbcomponent Builder object.
     */
    public static function init(EBBComponent $eventBasedComponent): self
    {
        return new self(new CreateEBBComponent($eventBasedComponent));
    }

    /**
     * Initializes a new create ebbcomponent object.
     */
    public function build(): CreateEBBComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
