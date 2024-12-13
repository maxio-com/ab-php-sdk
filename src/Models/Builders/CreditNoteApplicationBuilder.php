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
     * Initializes a new Credit Note Application Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditNoteApplication());
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
     * Sets invoice uid field.
     *
     * @param string|null $value
     */
    public function invoiceUid(?string $value): self
    {
        $this->instance->setInvoiceUid($value);
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
     * Initializes a new Credit Note Application object.
     */
    public function build(): CreditNoteApplication
    {
        return CoreHelper::clone($this->instance);
    }
}
