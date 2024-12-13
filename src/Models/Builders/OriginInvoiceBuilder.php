<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OriginInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model OriginInvoice
 *
 * @see OriginInvoice
 */
class OriginInvoiceBuilder
{
    /**
     * @var OriginInvoice
     */
    private $instance;

    private function __construct(OriginInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Origin Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new OriginInvoice());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets number field.
     *
     * @param string|null $value
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
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
     * Initializes a new Origin Invoice object.
     */
    public function build(): OriginInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
