<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationExpirationDate;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationExpirationDate
 *
 * @see AllocationExpirationDate
 */
class AllocationExpirationDateBuilder
{
    /**
     * @var AllocationExpirationDate
     */
    private $instance;

    private function __construct(AllocationExpirationDate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Allocation Expiration Date Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationExpirationDate());
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
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
     * Initializes a new Allocation Expiration Date object.
     */
    public function build(): AllocationExpirationDate
    {
        return CoreHelper::clone($this->instance);
    }
}
