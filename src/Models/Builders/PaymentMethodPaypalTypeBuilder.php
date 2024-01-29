<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodPaypalType;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodPaypalType
 *
 * @see PaymentMethodPaypalType
 */
class PaymentMethodPaypalTypeBuilder
{
    /**
     * @var PaymentMethodPaypalType
     */
    private $instance;

    private function __construct(PaymentMethodPaypalType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method paypal type Builder object.
     */
    public static function init(string $email, string $type): self
    {
        return new self(new PaymentMethodPaypalType($email, $type));
    }

    /**
     * Initializes a new payment method paypal type object.
     */
    public function build(): PaymentMethodPaypalType
    {
        return CoreHelper::clone($this->instance);
    }
}
