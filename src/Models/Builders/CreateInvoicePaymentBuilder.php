<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoicePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoicePayment
 *
 * @see CreateInvoicePayment
 */
class CreateInvoicePaymentBuilder
{
    /**
     * @var CreateInvoicePayment
     */
    private $instance;

    private function __construct(CreateInvoicePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Invoice Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoicePayment());
    }

    /**
     * Sets amount field.
     *
     * @param string|float|null $value
     */
    public function amount($value): self
    {
        $this->instance->setAmount($value);
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
     * Sets method field.
     *
     * @param string|null $value
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Sets details field.
     *
     * @param string|null $value
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     *
     * @param int|null $value
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
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
     * Initializes a new Create Invoice Payment object.
     */
    public function build(): CreateInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
