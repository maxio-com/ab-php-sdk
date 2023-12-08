<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNoteApplication;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditNoteApplication
 *
 * @see CreditNoteApplication
 */
class CreditNoteApplicationBuilder
{
    /**
     * @var CreditNoteApplication
     */
    private $instance;

    private function __construct(CreditNoteApplication $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit note application Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditNoteApplication());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets transaction time field.
     */
    public function transactionTime(?string $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Sets invoice uid field.
     */
    public function invoiceUid(?string $value): self
    {
        $this->instance->setInvoiceUid($value);
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
     * Sets applied amount field.
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Initializes a new credit note application object.
     */
    public function build(): CreditNoteApplication
    {
        return CoreHelper::clone($this->instance);
    }
}
