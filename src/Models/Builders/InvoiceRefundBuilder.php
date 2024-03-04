<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceRefund;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceRefund
 *
 * @see InvoiceRefund
 */
class InvoiceRefundBuilder
{
    /**
     * @var InvoiceRefund
     */
    private $instance;

    private function __construct(InvoiceRefund $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice refund Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceRefund());
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
     * Sets payment id field.
     */
    public function paymentId(?int $value): self
    {
        $this->instance->setPaymentId($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets original amount field.
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Sets gateway transaction id field.
     */
    public function gatewayTransactionId(?string $value): self
    {
        $this->instance->setGatewayTransactionId($value);
        return $this;
    }

    /**
     * Unsets gateway transaction id field.
     */
    public function unsetGatewayTransactionId(): self
    {
        $this->instance->unsetGatewayTransactionId();
        return $this;
    }

    /**
     * Sets gateway used field.
     */
    public function gatewayUsed(?string $value): self
    {
        $this->instance->setGatewayUsed($value);
        return $this;
    }

    /**
     * Sets gateway handle field.
     */
    public function gatewayHandle(?string $value): self
    {
        $this->instance->setGatewayHandle($value);
        return $this;
    }

    /**
     * Unsets gateway handle field.
     */
    public function unsetGatewayHandle(): self
    {
        $this->instance->unsetGatewayHandle();
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
     * Initializes a new invoice refund object.
     */
    public function build(): InvoiceRefund
    {
        return CoreHelper::clone($this->instance);
    }
}
