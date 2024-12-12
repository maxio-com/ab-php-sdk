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
use AdvancedBillingLib\Models\CreateInvoiceCoupon;
use AdvancedBillingLib\Models\CreateInvoiceItem;
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
     * Initializes a new Create Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoice());
    }

    /**
     * Sets line items field.
     *
     * @param CreateInvoiceItem[]|null $value
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets issue date field.
     *
     * @param \DateTime|null $value
     */
    public function issueDate(?\DateTime $value): self
    {
        $this->instance->setIssueDate($value);
        return $this;
    }

    /**
     * Sets net terms field.
     *
     * @param int|null $value
     */
    public function netTerms(?int $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Sets payment instructions field.
     *
     * @param string|null $value
     */
    public function paymentInstructions(?string $value): self
    {
        $this->instance->setPaymentInstructions($value);
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
     * Sets seller address field.
     *
     * @param CreateInvoiceAddress|null $value
     */
    public function sellerAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setSellerAddress($value);
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param CreateInvoiceAddress|null $value
     */
    public function billingAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     *
     * @param CreateInvoiceAddress|null $value
     */
    public function shippingAddress(?CreateInvoiceAddress $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets coupons field.
     *
     * @param CreateInvoiceCoupon[]|null $value
     */
    public function coupons(?array $value): self
    {
        $this->instance->setCoupons($value);
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
     * Initializes a new Create Invoice object.
     */
    public function build(): CreateInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
