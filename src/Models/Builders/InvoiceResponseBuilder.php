<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceResponse
 *
 * @see InvoiceResponse
 */
class InvoiceResponseBuilder
{
    /**
     * @var InvoiceResponse
     */
    private $instance;

    private function __construct(InvoiceResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice response Builder object.
     */
    public static function init(Invoice $invoice): self
    {
        return new self(new InvoiceResponse($invoice));
    }

    /**
     * Initializes a new invoice response object.
     */
    public function build(): InvoiceResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
