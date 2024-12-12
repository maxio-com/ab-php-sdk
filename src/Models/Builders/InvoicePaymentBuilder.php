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
     * Initializes a new Invoice Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePayment());
    }

    /**
     * Sets transaction time field.
     *
     * @param \DateTime|null $value
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets original amount field.
     *
     * @param string|null $value
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     *
     * @param string|null $value
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Sets payment method field.
     *
     * @param InvoicePaymentMethod|null $value
     */
    public function paymentMethod(?InvoicePaymentMethod $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
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
     * Sets prepayment field.
     *
     * @param bool|null $value
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
        return $this;
    }

    /**
     * Sets gateway handle field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
     */
    public function gatewayUsed(?string $value): self
    {
        $this->instance->setGatewayUsed($value);
        return $this;
    }

    /**
     * Sets gateway transaction id field.
     *
     * @param string|null $value
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
     * Sets received on field.
     *
     * @param \DateTime|null $value
     */
    public function receivedOn(?\DateTime $value): self
    {
        $this->instance->setReceivedOn($value);
        return $this;
    }

    /**
     * Unsets received on field.
     */
    public function unsetReceivedOn(): self
    {
        $this->instance->unsetReceivedOn();
        return $this;
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
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
     * Initializes a new Invoice Payment object.
     */
    public function build(): InvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
