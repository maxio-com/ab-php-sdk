<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\InvoiceSeller;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceSeller
 *
 * @see InvoiceSeller
 */
class InvoiceSellerBuilder
{
    /**
     * @var InvoiceSeller
     */
    private $instance;

    private function __construct(InvoiceSeller $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Seller Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceSeller());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param InvoiceAddress|null $value
     */
    public function address(?InvoiceAddress $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets phone field.
     *
     * @param string|null $value
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets logo url field.
     *
     * @param string|null $value
     */
    public function logoUrl(?string $value): self
    {
        $this->instance->setLogoUrl($value);
        return $this;
    }

    /**
     * Unsets logo url field.
     */
    public function unsetLogoUrl(): self
    {
        $this->instance->unsetLogoUrl();
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
     * Initializes a new Invoice Seller object.
     */
    public function build(): InvoiceSeller
    {
        return CoreHelper::clone($this->instance);
    }
}
