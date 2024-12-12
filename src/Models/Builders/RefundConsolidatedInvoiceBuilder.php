<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundConsolidatedInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundConsolidatedInvoice
 *
 * @see RefundConsolidatedInvoice
 */
class RefundConsolidatedInvoiceBuilder
{
    /**
     * @var RefundConsolidatedInvoice
     */
    private $instance;

    private function __construct(RefundConsolidatedInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Consolidated Invoice Builder object.
     *
     * @param string $memo
     * @param int $paymentId
     * @param string[]|string $segmentUids
     */
    public static function init(string $memo, int $paymentId, $segmentUids): self
    {
        return new self(new RefundConsolidatedInvoice($memo, $paymentId, $segmentUids));
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
     * Sets amount field.
     *
     * @param string|null $value
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
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
     * Initializes a new Refund Consolidated Invoice object.
     */
    public function build(): RefundConsolidatedInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
