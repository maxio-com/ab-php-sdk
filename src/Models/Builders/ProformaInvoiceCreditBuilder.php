<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoiceCredit;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceCredit
 *
 * @see ProformaInvoiceCredit
 */
class ProformaInvoiceCreditBuilder
{
    /**
     * @var ProformaInvoiceCredit
     */
    private $instance;

    private function __construct(ProformaInvoiceCredit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice credit Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceCredit());
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
     * Sets applied amount field.
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice credit object.
     */
    public function build(): ProformaInvoiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
