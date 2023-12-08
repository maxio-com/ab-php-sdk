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
     * Initializes a new mrrmovement Builder object.
     */
    public static function init(): self
    {
        return new self(new MRRMovement());
    }

    /**
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets category field.
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
        return $this;
    }

    /**
     * Sets subscriber delta field.
     */
    public function subscriberDelta(?int $value): self
    {
        $this->instance->setSubscriberDelta($value);
        return $this;
    }

    /**
     * Sets lead delta field.
     */
    public function leadDelta(?int $value): self
    {
        $this->instance->setLeadDelta($value);
        return $this;
    }

    /**
     * Initializes a new mrrmovement object.
     */
    public function build(): MRRMovement
    {
        return CoreHelper::clone($this->instance);
    }
}
