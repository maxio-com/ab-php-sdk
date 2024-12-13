<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PendingCancellationChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model PendingCancellationChange
 *
 * @see PendingCancellationChange
 */
class PendingCancellationChangeBuilder
{
    /**
     * @var PendingCancellationChange
     */
    private $instance;

    private function __construct(PendingCancellationChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Pending Cancellation Change Builder object.
     *
     * @param string $cancellationState
     * @param \DateTime $cancelsAt
     */
    public static function init(string $cancellationState, \DateTime $cancelsAt): self
    {
        return new self(new PendingCancellationChange($cancellationState, $cancelsAt));
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
     * Initializes a new Pending Cancellation Change object.
     */
    public function build(): PendingCancellationChange
    {
        return CoreHelper::clone($this->instance);
    }
}
