<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceDisplaySettings;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceDisplaySettings
 *
 * @see InvoiceDisplaySettings
 */
class InvoiceDisplaySettingsBuilder
{
    /**
     * @var InvoiceDisplaySettings
     */
    private $instance;

    private function __construct(InvoiceDisplaySettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice display settings Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDisplaySettings());
    }

    /**
     * Sets hide zero subtotal lines field.
     */
    public function hideZeroSubtotalLines(?bool $value): self
    {
        $this->instance->setHideZeroSubtotalLines($value);
        return $this;
    }

    /**
     * Sets include discounts on lines field.
     */
    public function includeDiscountsOnLines(?bool $value): self
    {
        $this->instance->setIncludeDiscountsOnLines($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new invoice display settings object.
     */
    public function build(): InvoiceDisplaySettings
    {
        return CoreHelper::clone($this->instance);
    }
}
