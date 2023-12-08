<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\QuantityBasedComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateQuantityBasedComponent
 *
 * @see CreateQuantityBasedComponent
 */
class CreateQuantityBasedComponentBuilder
{
    /**
     * @var CreateQuantityBasedComponent
     */
    private $instance;

    private function __construct(CreateQuantityBasedComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create quantity based component Builder object.
     */
    public static function init(QuantityBasedComponent $quantityBasedComponent): self
    {
        return new self(new CreateQuantityBasedComponent($quantityBasedComponent));
    }

    /**
     * Initializes a new create quantity based component object.
     */
    public function build(): CreateQuantityBasedComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
