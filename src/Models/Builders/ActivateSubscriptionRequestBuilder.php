<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ActivateSubscriptionRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model ActivateSubscriptionRequest
 *
 * @see ActivateSubscriptionRequest
 */
class ActivateSubscriptionRequestBuilder
{
    /**
     * @var ActivateSubscriptionRequest
     */
    private $instance;

    private function __construct(ActivateSubscriptionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new activate subscription request Builder object.
     */
    public static function init(): self
    {
        return new self(new ActivateSubscriptionRequest());
    }

    /**
     * Sets revert on failure field.
     */
    public function revertOnFailure(?bool $value): self
    {
        $this->instance->setRevertOnFailure($value);
        return $this;
    }

    /**
     * Unsets revert on failure field.
     */
    public function unsetRevertOnFailure(): self
    {
        $this->instance->unsetRevertOnFailure();
        return $this;
    }

    /**
     * Initializes a new activate subscription request object.
     */
    public function build(): ActivateSubscriptionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
