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
     * Initializes a new cancel grouped subscriptions request Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelGroupedSubscriptionsRequest());
    }

    /**
     * Sets charge unbilled usage field.
     */
    public function chargeUnbilledUsage(?bool $value): self
    {
        $this->instance->setChargeUnbilledUsage($value);
        return $this;
    }

    /**
     * Initializes a new cancel grouped subscriptions request object.
     */
    public function build(): CancelGroupedSubscriptionsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
