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
     * Initializes a new Create Offer Component Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOfferComponent());
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     *
     * @param int|null $value
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Create Offer Component object.
     */
    public function build(): CreateOfferComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
