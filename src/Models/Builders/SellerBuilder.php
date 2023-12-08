<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceAddress;
use AdvancedBillingLib\Models\Seller;
use Core\Utils\CoreHelper;

/**
 * Builder for model Seller
 *
 * @see Seller
 */
class SellerBuilder
{
    /**
     * @var Seller
     */
    private $instance;

    private function __construct(Seller $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new seller Builder object.
     */
    public static function init(): self
    {
        return new self(new Seller());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?InvoiceAddress $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets logo url field.
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
     * Initializes a new seller object.
     */
    public function build(): Seller
    {
        return CoreHelper::clone($this->instance);
    }
}
