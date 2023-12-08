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
     * Initializes a new proforma invoice payment Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoicePayment());
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
     * Sets prepayment field.
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice payment object.
     */
    public function build(): ProformaInvoicePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
