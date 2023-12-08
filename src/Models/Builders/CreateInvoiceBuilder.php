<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoice;
use AdvancedBillingLib\Models\CreateInvoiceAddress;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoice
 *
 * @see CreateInvoice
 */
class CreateInvoiceBuilder
{
    /**
     * @var CreateInvoice
     */
    private $instance;

    private function __construct(CreateInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoice());
    }

    /**
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets issue date field.
     */
    public function issueDate(?string $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Sets net terms field.
     */
    public function netTerms(?int $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Sets payment instructions field.
     */
    public function paymentInstructions(?string $value): self
    {
        $this->instance->setPaymentInstructions($value);
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
     * Sets seller address field.
     */
    public function sellerAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setSellerAddress($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     */
    public function shippingAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets coupons field.
     */
    public function coupons(?array $value): self
    {
        $this->instance->setCoupons($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new create invoice object.
     */
    public function build(): CreateInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
