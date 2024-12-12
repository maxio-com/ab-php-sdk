<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CancellationOptions;
use AdvancedBillingLib\Models\CancellationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CancellationRequest
 *
 * @see CancellationRequest
 */
class CancellationRequestBuilder
{
    /**
     * @var CancellationRequest
     */
    private $instance;

    private function __construct(CancellationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancellation Request Builder object.
     *
     * @param CancellationOptions $subscription
     */
    public static function init(CancellationOptions $subscription): self
    {
        return new self(new CancellationRequest($subscription));
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
     * Initializes a new Cancellation Request object.
     */
    public function build(): CancellationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
