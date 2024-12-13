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
     * Initializes a new Invoice Pre Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePrePayment());
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     *
     * @param int|null $value
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     *
     * @param int|null $value
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
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
     * Initializes a new Invoice Pre Payment object.
     */
    public function build(): InvoicePrePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
