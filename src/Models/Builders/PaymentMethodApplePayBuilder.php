<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodApplePay;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodApplePay
 *
 * @see PaymentMethodApplePay
 */
class PaymentMethodApplePayBuilder
{
    /**
     * @var PaymentMethodApplePay
     */
    private $instance;

    private function __construct(PaymentMethodApplePay $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method apple pay Builder object.
     */
    public static function init(string $type): self
    {
        return new self(new PaymentMethodApplePay($type));
    }

    /**
     * Initializes a new payment method apple pay object.
     */
    public function build(): PaymentMethodApplePay
    {
        return CoreHelper::clone($this->instance);
    }
}
