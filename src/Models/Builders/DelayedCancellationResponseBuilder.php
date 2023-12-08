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
     * Initializes a new delayed cancellation response Builder object.
     */
    public static function init(): self
    {
        return new self(new DelayedCancellationResponse());
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new delayed cancellation response object.
     */
    public function build(): DelayedCancellationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
