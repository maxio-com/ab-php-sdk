<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MultiInvoicePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model MultiInvoicePayment
 *
 * @see MultiInvoicePayment
 */
class MultiInvoicePaymentBuilder
{
    /**
     * @var MultiInvoicePayment
     */
    private $instance;

    private function __construct(MultiInvoicePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new multi invoice payment Builder object.
     */
    public static function init(): self
    {
        return new self(new MultiInvoicePayment());
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets total amount field.
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets currency code field.
     */
    public function currencyCode(?string $value): self
    {
        $this->instance->setCurrencyCode($value);
        return $this;
    }

    /**
     * Sets applications field.
     */
    public function applications(?array $value): self
    {
        $this->instance->setApplications($value);
        return $this;
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
     * Initializes a new multi invoice payment object.
     */
    public function build(): MultiInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
