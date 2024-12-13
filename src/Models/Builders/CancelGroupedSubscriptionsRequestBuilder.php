<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CancelGroupedSubscriptionsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CancelGroupedSubscriptionsRequest
 *
 * @see CancelGroupedSubscriptionsRequest
 */
class CancelGroupedSubscriptionsRequestBuilder
{
    /**
     * @var CancelGroupedSubscriptionsRequest
     */
    private $instance;

    private function __construct(CancelGroupedSubscriptionsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancel Grouped Subscriptions Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelGroupedSubscriptionsRequest());
    }

    /**
     * Sets charge unbilled usage field.
     *
     * @param bool|null $value
     */
    public function chargeUnbilledUsage(?bool $value): self
    {
        $this->instance->setChargeUnbilledUsage($value);
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
     * Initializes a new Cancel Grouped Subscriptions Request object.
     */
    public function build(): CancelGroupedSubscriptionsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
