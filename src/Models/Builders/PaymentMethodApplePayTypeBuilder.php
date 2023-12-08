<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodApplePayType;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodApplePayType
 *
 * @see PaymentMethodApplePayType
 */
class PaymentMethodApplePayTypeBuilder
{
    /**
     * @var PaymentMethodApplePayType
     */
    private $instance;

    private function __construct(PaymentMethodApplePayType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method apple pay type Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentMethodApplePayType());
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new payment method apple pay type object.
     */
    public function build(): PaymentMethodApplePayType
    {
        return CoreHelper::clone($this->instance);
    }
}
