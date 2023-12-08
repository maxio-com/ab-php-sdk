<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MultiInvoicePayment;
use AdvancedBillingLib\Models\MultiInvoicePaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model MultiInvoicePaymentResponse
 *
 * @see MultiInvoicePaymentResponse
 */
class MultiInvoicePaymentResponseBuilder
{
    /**
     * @var MultiInvoicePaymentResponse
     */
    private $instance;

    private function __construct(MultiInvoicePaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new multi invoice payment response Builder object.
     */
    public static function init(MultiInvoicePayment $payment): self
    {
        return new self(new MultiInvoicePaymentResponse($payment));
    }

    /**
     * Initializes a new multi invoice payment response object.
     */
    public function build(): MultiInvoicePaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
