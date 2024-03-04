<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\VoidInvoice;
use AdvancedBillingLib\Models\VoidInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoiceRequest
 *
 * @see VoidInvoiceRequest
 */
class VoidInvoiceRequestBuilder
{
    /**
     * @var VoidInvoiceRequest
     */
    private $instance;

    private function __construct(VoidInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new void invoice request Builder object.
     */
    public static function init(VoidInvoice $void): self
    {
        return new self(new VoidInvoiceRequest($void));
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
     * Initializes a new void invoice request object.
     */
    public function build(): VoidInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
