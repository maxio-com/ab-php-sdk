<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoice
 *
 * @see RefundInvoice
 */
class RefundInvoiceBuilder
{
    /**
     * @var RefundInvoice
     */
    private $instance;

    private function __construct(RefundInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Invoice Builder object.
     *
     * @param string $amount
     * @param string $memo
     * @param int $paymentId
     */
    public static function init(string $amount, string $memo, int $paymentId): self
    {
        return new self(new RefundInvoice($amount, $memo, $paymentId));
    }

    /**
     * Sets external field.
     *
     * @param bool|null $value
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Sets apply credit field.
     *
     * @param bool|null $value
     */
    public function applyCredit(?bool $value): self
    {
        $this->instance->setApplyCredit($value);
        return $this;
    }

    /**
     * Sets void invoice field.
     *
     * @param bool|null $value
     */
    public function voidInvoice(?bool $value): self
    {
        $this->instance->setVoidInvoice($value);
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
     * Initializes a new Refund Invoice object.
     */
    public function build(): RefundInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
