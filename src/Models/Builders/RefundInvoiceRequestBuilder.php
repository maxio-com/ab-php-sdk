<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoiceRequest
 *
 * @see RefundInvoiceRequest
 */
class RefundInvoiceRequestBuilder
{
    /**
     * @var RefundInvoiceRequest
     */
    private $instance;

    private function __construct(RefundInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund invoice request Builder object.
     */
    public static function init($refund): self
    {
        return new self(new RefundInvoiceRequest($refund));
    }

    /**
     * Initializes a new refund invoice request object.
     */
    public function build(): RefundInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
