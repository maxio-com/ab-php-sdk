<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOfferComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOfferComponent
 *
 * @see CreateOfferComponent
 */
class CreateOfferComponentBuilder
{
    /**
     * @var CreateOfferComponent
     */
    private $instance;

    private function __construct(CreateOfferComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create offer component Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOfferComponent());
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Initializes a new create offer component object.
     */
    public function build(): CreateOfferComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
