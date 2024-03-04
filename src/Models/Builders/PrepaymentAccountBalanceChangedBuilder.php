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
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new prepayment account balance changed object.
     */
    public function build(): PrepaymentAccountBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
