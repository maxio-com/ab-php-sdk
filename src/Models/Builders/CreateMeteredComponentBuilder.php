<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMeteredComponent;
use AdvancedBillingLib\Models\MeteredComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMeteredComponent
 *
 * @see CreateMeteredComponent
 */
class CreateMeteredComponentBuilder
{
    /**
     * @var CreateMeteredComponent
     */
    private $instance;

    private function __construct(CreateMeteredComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create metered component Builder object.
     */
    public static function init(MeteredComponent $meteredComponent): self
    {
        return new self(new CreateMeteredComponent($meteredComponent));
    }

    /**
     * Initializes a new create metered component object.
     */
    public function build(): CreateMeteredComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
