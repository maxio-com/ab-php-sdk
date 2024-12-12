<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AccountBalance;
use AdvancedBillingLib\Models\SubscriptionGroupBalances;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupBalances
 *
 * @see SubscriptionGroupBalances
 */
class SubscriptionGroupBalancesBuilder
{
    /**
     * @var SubscriptionGroupBalances
     */
    private $instance;

    private function __construct(SubscriptionGroupBalances $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Balances Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupBalances());
    }

    /**
     * Sets prepayments field.
     *
     * @param AccountBalance|null $value
     */
    public function prepayments(?AccountBalance $value): self
    {
        $this->instance->setPrepayments($value);
        return $this;
    }

    /**
     * Sets service credits field.
     *
     * @param AccountBalance|null $value
     */
    public function serviceCredits(?AccountBalance $value): self
    {
        $this->instance->setServiceCredits($value);
        return $this;
    }

    /**
     * Sets open invoices field.
     *
     * @param AccountBalance|null $value
     */
    public function openInvoices(?AccountBalance $value): self
    {
        $this->instance->setOpenInvoices($value);
        return $this;
    }

    /**
     * Sets pending discounts field.
     *
     * @param AccountBalance|null $value
     */
    public function pendingDiscounts(?AccountBalance $value): self
    {
        $this->instance->setPendingDiscounts($value);
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
     * Initializes a new Subscription Group Balances object.
     */
    public function build(): SubscriptionGroupBalances
    {
        return CoreHelper::clone($this->instance);
    }
}
