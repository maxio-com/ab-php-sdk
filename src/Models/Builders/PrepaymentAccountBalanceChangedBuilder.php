<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaymentAccountBalanceChanged;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentAccountBalanceChanged
 *
 * @see PrepaymentAccountBalanceChanged
 */
class PrepaymentAccountBalanceChangedBuilder
{
    /**
     * @var PrepaymentAccountBalanceChanged
     */
    private $instance;

    private function __construct(PrepaymentAccountBalanceChanged $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayment account balance changed Builder object.
     */
    public static function init(
        string $reason,
        int $prepaymentAccountBalanceInCents,
        int $prepaymentBalanceChangeInCents,
        string $currencyCode
    ): self {
        return new self(new PrepaymentAccountBalanceChanged(
            $reason,
            $prepaymentAccountBalanceInCents,
            $prepaymentBalanceChangeInCents,
            $currencyCode
        ));
    }

    /**
     * Initializes a new prepayment account balance changed object.
     */
    public function build(): PrepaymentAccountBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
