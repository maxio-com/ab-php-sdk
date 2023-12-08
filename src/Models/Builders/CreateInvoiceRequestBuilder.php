<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoice;
use AdvancedBillingLib\Models\CreateInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoiceRequest
 *
 * @see CreateInvoiceRequest
 */
class CreateInvoiceRequestBuilder
{
    /**
     * @var CreateInvoiceRequest
     */
    private $instance;

    private function __construct(CreateInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create invoice request Builder object.
     */
    public static function init(CreateInvoice $invoice): self
    {
        return new self(new CreateInvoiceRequest($invoice));
    }

    /**
     * Initializes a new create invoice request object.
     */
    public function build(): CreateInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
