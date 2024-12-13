<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceDebit;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceDebit
 *
 * @see InvoiceDebit
 */
class InvoiceDebitBuilder
{
    /**
     * @var InvoiceDebit
     */
    private $instance;

    private function __construct(InvoiceDebit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Debit Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDebit());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets debit note number field.
     *
     * @param string|null $value
     */
    public function debitNoteNumber(?string $value): self
    {
        $this->instance->setDebitNoteNumber($value);
        return $this;
    }

    /**
     * Sets debit note uid field.
     *
     * @param string|null $value
     */
    public function debitNoteUid(?string $value): self
    {
        $this->instance->setDebitNoteUid($value);
        return $this;
    }

    /**
     * Sets role field.
     *
     * @param string|null $value
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
        return $this;
    }

    /**
     * Sets transaction time field.
     *
     * @param \DateTime|null $value
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
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
     * Sets original amount field.
     *
     * @param string|null $value
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     *
     * @param string|null $value
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
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
     * Initializes a new Invoice Debit object.
     */
    public function build(): InvoiceDebit
    {
        return CoreHelper::clone($this->instance);
    }
}