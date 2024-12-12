<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePaymentApplication;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePaymentApplication
 *
 * @see InvoicePaymentApplication
 */
class InvoicePaymentApplicationBuilder
{
    /**
     * @var InvoicePaymentApplication
     */
    private $instance;

    private function __construct(InvoicePaymentApplication $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Payment Application Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePaymentApplication());
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
     * Sets application uid field.
     *
     * @param string|null $value
     */
    public function applicationUid(?string $value): self
    {
        $this->instance->setApplicationUid($value);
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
     * Initializes a new Invoice Payment Application object.
     */
    public function build(): InvoicePaymentApplication
    {
        return CoreHelper::clone($this->instance);
    }
}
