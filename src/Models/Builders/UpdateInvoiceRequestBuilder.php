<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateInvoice;
use AdvancedBillingLib\Models\UpdateInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateInvoiceRequest
 *
 * @see UpdateInvoiceRequest
 */
class UpdateInvoiceRequestBuilder
{
    /**
     * @var UpdateInvoiceRequest
     */
    private $instance;

    private function __construct(UpdateInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Invoice Request Builder object.
     *
     * @param UpdateInvoice $invoice
     */
    public static function init(UpdateInvoice $invoice): self
    {
        return new self(new UpdateInvoiceRequest($invoice));
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
     * Initializes a new Update Invoice Request object.
     */
    public function build(): UpdateInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
