<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MRRMovement;
use Core\Utils\CoreHelper;

/**
 * Builder for model MRRMovement
 *
 * @see MRRMovement
 */
class MRRMovementBuilder
{
    /**
     * @var MRRMovement
     */
    private $instance;

    private function __construct(MRRMovement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new MRR Movement Builder object.
     */
    public static function init(): self
    {
        return new self(new MRRMovement());
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets category field.
     *
     * @param string|null $value
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
        return $this;
    }

    /**
     * Sets subscriber delta field.
     *
     * @param int|null $value
     */
    public function subscriberDelta(?int $value): self
    {
        $this->instance->setSubscriberDelta($value);
        return $this;
    }

    /**
     * Sets lead delta field.
     *
     * @param int|null $value
     */
    public function leadDelta(?int $value): self
    {
        $this->instance->setLeadDelta($value);
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
     * Initializes a new MRR Movement object.
     */
    public function build(): MRRMovement
    {
        return CoreHelper::clone($this->instance);
    }
}
