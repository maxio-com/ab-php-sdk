<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\RefundInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoiceEventData
 *
 * @see RefundInvoiceEventData
 */
class RefundInvoiceEventDataBuilder
{
    /**
     * @var RefundInvoiceEventData
     */
    private $instance;

    private function __construct(RefundInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund invoice event data Builder object.
     */
    public static function init(
        bool $applyCredit,
        CreditNote $creditNoteAttributes,
        int $paymentId,
        string $refundAmount,
        int $refundId,
        \DateTime $transactionTime
    ): self {
        return new self(new RefundInvoiceEventData(
            $applyCredit,
            $creditNoteAttributes,
            $paymentId,
            $refundAmount,
            $refundId,
            $transactionTime
        ));
    }

    /**
     * Sets consolidation level field.
     */
    public function consolidationLevel(?string $value): self
    {
        $this->instance->setConsolidationLevel($value);
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
     * Initializes a new refund invoice event data object.
     */
    public function build(): RefundInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
