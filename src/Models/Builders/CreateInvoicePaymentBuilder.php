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
     * Initializes a new create invoice payment Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoicePayment());
    }

    /**
     * Sets amount field.
     */
    public function amount($value): self
    {
        $this->instance->setAmount($value);
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
     * Sets method field.
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Initializes a new create invoice payment object.
     */
    public function build(): CreateInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
