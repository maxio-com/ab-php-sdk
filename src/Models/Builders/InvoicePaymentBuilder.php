<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePayment;
use AdvancedBillingLib\Models\InvoicePaymentMethod;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePayment
 *
 * @see InvoicePayment
 */
class InvoicePaymentBuilder
{
    /**
     * @var InvoicePayment
     */
    private $instance;

    private function __construct(InvoicePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice payment Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePayment());
    }

    /**
     * Sets transaction time field.
     */
    public function transactionTime(?string $value): self
    {
        $this->instance->setTransactionTime($value);
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
     * Sets payment method field.
     */
    public function paymentMethod(?InvoicePaymentMethod $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
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
     * Sets prepayment field.
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
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
     * Sets gateway used field.
     */
    public function gatewayUsed(?string $value): self
    {
        $this->instance->setGatewayUsed($value);
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
     * Initializes a new invoice payment object.
     */
    public function build(): InvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
