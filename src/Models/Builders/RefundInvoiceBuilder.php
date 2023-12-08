<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoice
 *
 * @see RefundInvoice
 */
class RefundInvoiceBuilder
{
    /**
     * @var RefundInvoice
     */
    private $instance;

    private function __construct(RefundInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund invoice Builder object.
     */
    public static function init(string $amount, string $memo, int $paymentId): self
    {
        return new self(new RefundInvoice($amount, $memo, $paymentId));
    }

    /**
     * Sets external field.
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Sets apply credit field.
     */
    public function applyCredit(?bool $value): self
    {
        $this->instance->setApplyCredit($value);
        return $this;
    }

    /**
     * Sets void invoice field.
     */
    public function voidInvoice(?bool $value): self
    {
        $this->instance->setVoidInvoice($value);
        return $this;
    }

    /**
     * Initializes a new refund invoice object.
     */
    public function build(): RefundInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
