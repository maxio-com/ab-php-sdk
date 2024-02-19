<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePrePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePrePayment
 *
 * @see InvoicePrePayment
 */
class InvoicePrePaymentBuilder
{
    /**
     * @var InvoicePrePayment
     */
    private $instance;

    private function __construct(InvoicePrePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice pre payment Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePrePayment());
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new invoice pre payment object.
     */
    public function build(): InvoicePrePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
