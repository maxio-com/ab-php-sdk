<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

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
     * Initializes a new create multi invoice payment Builder object.
     */
    public static function init($amount, array $applications): self
    {
        return new self(new CreateMultiInvoicePayment($amount, $applications));
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
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
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
     * Sets received on field.
     */
    public function receivedOn(?string $value): self
    {
        $this->instance->setReceivedOn($value);
        return $this;
    }

    /**
     * Initializes a new create multi invoice payment object.
     */
    public function build(): CreateMultiInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
