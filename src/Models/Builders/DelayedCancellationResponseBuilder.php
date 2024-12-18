<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DelayedCancellationResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model DelayedCancellationResponse
 *
 * @see DelayedCancellationResponse
 */
class DelayedCancellationResponseBuilder
{
    /**
     * @var DelayedCancellationResponse
     */
    private $instance;

    private function __construct(DelayedCancellationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Delayed Cancellation Response Builder object.
     */
    public static function init(): self
    {
        return new self(new DelayedCancellationResponse());
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
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
     * Initializes a new Delayed Cancellation Response object.
     */
    public function build(): DelayedCancellationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
