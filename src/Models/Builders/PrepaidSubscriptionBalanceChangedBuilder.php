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
     * Initializes a new Prepaid Subscription Balance Changed Builder object.
     *
     * @param string $reason
     * @param int $currentAccountBalanceInCents
     * @param int $prepaymentAccountBalanceInCents
     * @param int $currentUsageAmountInCents
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
     * Initializes a new Prepaid Subscription Balance Changed object.
     */
    public function build(): PrepaidSubscriptionBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
