<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\VoidInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoiceEventData
 *
 * @see VoidInvoiceEventData
 */
class VoidInvoiceEventDataBuilder
{
    /**
     * @var VoidInvoiceEventData
     */
    private $instance;

    private function __construct(VoidInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new void invoice event data Builder object.
     */
    public static function init(
        CreditNote $creditNoteAttributes,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime,
        bool $isAdvanceInvoice
    ): self {
        return new self(
            new VoidInvoiceEventData(
                $creditNoteAttributes,
                $memo,
                $appliedAmount,
                $transactionTime,
                $isAdvanceInvoice
            )
        );
    }

    /**
     * Initializes a new void invoice event data object.
     */
    public function build(): VoidInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
