<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChargifyEBB;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChargifyEBB
 *
 * @see ChargifyEBB
 */
class ChargifyEBBBuilder
{
    /**
     * @var ChargifyEBB
     */
    private $instance;

    private function __construct(ChargifyEBB $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new chargify ebb Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargifyEBB());
    }

    /**
     * Sets timestamp field.
     */
    public function timestamp(?\DateTime $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets uniqueness token field.
     */
    public function uniquenessToken(?string $value): self
    {
        $this->instance->setUniquenessToken($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets subscription reference field.
     */
    public function subscriptionReference(?string $value): self
    {
        $this->instance->setSubscriptionReference($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new chargify ebb object.
     */
    public function build(): ChargifyEBB
    {
        return CoreHelper::clone($this->instance);
    }
}
