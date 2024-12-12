<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePaymentApplication;
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
     * Initializes a new Multi Invoice Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new MultiInvoicePayment());
    }

    /**
     * Sets transaction id field.
     *
     * @param int|null $value
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets total amount field.
     *
     * @param string|null $value
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets currency code field.
     *
     * @param string|null $value
     */
    public function currencyCode(?string $value): self
    {
        $this->instance->setCurrencyCode($value);
        return $this;
    }

    /**
     * Sets applications field.
     *
     * @param InvoicePaymentApplication[]|null $value
     */
    public function applications(?array $value): self
    {
        $this->instance->setApplications($value);
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
     * Initializes a new Multi Invoice Payment object.
     */
    public function build(): MultiInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
