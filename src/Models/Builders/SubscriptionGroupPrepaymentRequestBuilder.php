<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupPrepayment;
use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupPrepaymentRequest
 *
 * @see SubscriptionGroupPrepaymentRequest
 */
class SubscriptionGroupPrepaymentRequestBuilder
{
    /**
     * @var SubscriptionGroupPrepaymentRequest
     */
    private $instance;

    private function __construct(SubscriptionGroupPrepaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group prepayment request Builder object.
     */
    public static function init(SubscriptionGroupPrepayment $prepayment): self
    {
        return new self(new SubscriptionGroupPrepaymentRequest($prepayment));
    }

    /**
     * Initializes a new subscription group prepayment request object.
     */
    public function build(): SubscriptionGroupPrepaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
