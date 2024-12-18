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
     * Initializes a new Credit Account Balance Changed Builder object.
     *
     * @param string $reason
     * @param int $serviceCreditAccountBalanceInCents
     * @param int $serviceCreditBalanceChangeInCents
     * @param string $currencyCode
     * @param \DateTime $atTime
     */
    public static function init(
        string $reason,
        int $serviceCreditAccountBalanceInCents,
        int $serviceCreditBalanceChangeInCents,
        string $currencyCode,
        \DateTime $atTime
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
     * Initializes a new Credit Account Balance Changed object.
     */
    public function build(): CreditAccountBalanceChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
