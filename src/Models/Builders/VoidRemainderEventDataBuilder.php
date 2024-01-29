<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\VoidRemainderEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidRemainderEventData
 *
 * @see VoidRemainderEventData
 */
class VoidRemainderEventDataBuilder
{
    /**
     * @var VoidRemainderEventData
     */
    private $instance;

    private function __construct(VoidRemainderEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new void remainder event data Builder object.
     */
    public static function init(
        CreditNote $creditNoteAttributes,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime
    ): self {
        return new self(new VoidRemainderEventData($creditNoteAttributes, $memo, $appliedAmount, $transactionTime));
    }

    /**
     * Initializes a new void remainder event data object.
     */
    public function build(): VoidRemainderEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
