<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoicePaymentApplication;
use AdvancedBillingLib\Models\CreateMultiInvoicePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMultiInvoicePayment
 *
 * @see CreateMultiInvoicePayment
 */
class CreateMultiInvoicePaymentBuilder
{
    /**
     * @var CreateMultiInvoicePayment
     */
    private $instance;

    private function __construct(CreateMultiInvoicePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Multi Invoice Payment Builder object.
     *
     * @param string|float $amount
     * @param CreateInvoicePaymentApplication[] $applications
     */
    public static function init($amount, array $applications): self
    {
        return new self(new CreateMultiInvoicePayment($amount, $applications));
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
     * Sets received on field.
     *
     * @param string|null $value
     */
    public function receivedOn(?string $value): self
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
     * Initializes a new Create Multi Invoice Payment object.
     */
    public function build(): CreateMultiInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
