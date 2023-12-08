<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditAccountBalanceChanged;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditAccountBalanceChanged
 *
 * @see CreditAccountBalanceChanged
 */
class CreditAccountBalanceChangedBuilder
{
    /**
     * @var CreditAccountBalanceChanged
     */
    private $instance;

    private function __construct(CreditAccountBalanceChanged $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit account balance changed Builder object.
     */
    public static function init(
        string $reason,
        int $serviceCreditAccountBalanceInCents,
        int $serviceCreditBalanceChangeInCents,
        string $currencyCode,
        string $atTime
    ): self {
        return new self(new CreditAccountBalanceChanged(
            $reason,
            $serviceCreditAccountBalanceInCents,
            $serviceCreditBalanceChangeInCents,
            $currencyCode,
            $atTime
        ));
    }

    /**
     * Initializes a new credit account balance changed object.
     */
    public function build(): CreditAccountBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
