<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidSubscriptionBalanceChanged;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidSubscriptionBalanceChanged
 *
 * @see PrepaidSubscriptionBalanceChanged
 */
class PrepaidSubscriptionBalanceChangedBuilder
{
    /**
     * @var PrepaidSubscriptionBalanceChanged
     */
    private $instance;

    private function __construct(PrepaidSubscriptionBalanceChanged $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepaid subscription balance changed Builder object.
     */
    public static function init(
        string $reason,
        int $currentAccountBalanceInCents,
        int $prepaymentAccountBalanceInCents,
        int $currentUsageAmountInCents
    ): self {
        return new self(new PrepaidSubscriptionBalanceChanged(
            $reason,
            $currentAccountBalanceInCents,
            $prepaymentAccountBalanceInCents,
            $currentUsageAmountInCents
        ));
    }

    /**
     * Initializes a new prepaid subscription balance changed object.
     */
    public function build(): PrepaidSubscriptionBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
