<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceCustomField;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceCustomField
 *
 * @see InvoiceCustomField
 */
class InvoiceCustomFieldBuilder
{
    /**
     * @var InvoiceCustomField
     */
    private $instance;

    private function __construct(InvoiceCustomField $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice custom field Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceCustomField());
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
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets owner id field.
     */
    public function ownerId(?int $value): self
    {
        $this->instance->setOwnerId($value);
        return $this;
    }

    /**
     * Sets owner type field.
     */
    public function ownerType(?string $value): self
    {
        $this->instance->setOwnerType($value);
        return $this;
    }

    /**
     * Initializes a new invoice custom field object.
     */
    public function build(): InvoiceCustomField
    {
        return CoreHelper::clone($this->instance);
    }
}
