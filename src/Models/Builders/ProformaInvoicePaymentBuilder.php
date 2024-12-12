<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoicePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoicePayment
 *
 * @see ProformaInvoicePayment
 */
class ProformaInvoicePaymentBuilder
{
    /**
     * @var ProformaInvoicePayment
     */
    private $instance;

    private function __construct(ProformaInvoicePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Proforma Invoice Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoicePayment());
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
     * Sets prepayment field.
     *
     * @param bool|null $value
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
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
     * Initializes a new Proforma Invoice Payment object.
     */
    public function build(): ProformaInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
