<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMRRBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMRRBreakout
 *
 * @see SubscriptionMRRBreakout
 */
class SubscriptionMRRBreakoutBuilder
{
    /**
     * @var SubscriptionMRRBreakout
     */
    private $instance;

    private function __construct(SubscriptionMRRBreakout $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription mrrbreakout Builder object.
     */
    public static function init(int $planAmountInCents, int $usageAmountInCents): self
    {
        return new self(new SubscriptionMRRBreakout($planAmountInCents, $usageAmountInCents));
    }

    /**
     * Initializes a new subscription mrrbreakout object.
     */
    public function build(): SubscriptionMRRBreakout
    {
        return CoreHelper::clone($this->instance);
    }
}
