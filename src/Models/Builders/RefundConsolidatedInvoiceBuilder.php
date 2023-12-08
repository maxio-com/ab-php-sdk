<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundConsolidatedInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundConsolidatedInvoice
 *
 * @see RefundConsolidatedInvoice
 */
class RefundConsolidatedInvoiceBuilder
{
    /**
     * @var RefundConsolidatedInvoice
     */
    private $instance;

    private function __construct(RefundConsolidatedInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund consolidated invoice Builder object.
     */
    public static function init(string $memo, int $paymentId, $segmentUids): self
    {
        return new self(new RefundConsolidatedInvoice($memo, $paymentId, $segmentUids));
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
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Initializes a new refund consolidated invoice object.
     */
    public function build(): RefundConsolidatedInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
