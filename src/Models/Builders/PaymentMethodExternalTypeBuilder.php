<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodExternalType;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodExternalType
 *
 * @see PaymentMethodExternalType
 */
class PaymentMethodExternalTypeBuilder
{
    /**
     * @var PaymentMethodExternalType
     */
    private $instance;

    private function __construct(PaymentMethodExternalType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method external type Builder object.
     */
    public static function init(string $details, string $kind, string $memo, string $type): self
    {
        return new self(new PaymentMethodExternalType($details, $kind, $memo, $type));
    }

    /**
     * Initializes a new payment method external type object.
     */
    public function build(): PaymentMethodExternalType
    {
        return CoreHelper::clone($this->instance);
    }
}
