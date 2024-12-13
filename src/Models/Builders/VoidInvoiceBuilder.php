<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\VoidInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoice
 *
 * @see VoidInvoice
 */
class VoidInvoiceBuilder
{
    /**
     * @var VoidInvoice
     */
    private $instance;

    private function __construct(VoidInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Void Invoice Builder object.
     *
     * @param string $reason
     */
    public static function init(string $reason): self
    {
        return new self(new VoidInvoice($reason));
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
     * Initializes a new Void Invoice object.
     */
    public function build(): VoidInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
