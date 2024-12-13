<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaidInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaidInvoice
 *
 * @see PaidInvoice
 */
class PaidInvoiceBuilder
{
    /**
     * @var PaidInvoice
     */
    private $instance;

    private function __construct(PaidInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Paid Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new PaidInvoice());
    }

    /**
     * Sets invoice id field.
     *
     * @param string|null $value
     */
    public function invoiceId(?string $value): self
    {
        $this->instance->setInvoiceId($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets due amount field.
     *
     * @param string|null $value
     */
    public function dueAmount(?string $value): self
    {
        $this->instance->setDueAmount($value);
        return $this;
    }

    /**
     * Sets paid amount field.
     *
     * @param string|null $value
     */
    public function paidAmount(?string $value): self
    {
        $this->instance->setPaidAmount($value);
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
     * Initializes a new Paid Invoice object.
     */
    public function build(): PaidInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
