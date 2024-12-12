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
     * Initializes a new Proforma Invoice Credit Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceCredit());
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
     * Initializes a new Proforma Invoice Credit object.
     */
    public function build(): ProformaInvoiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
