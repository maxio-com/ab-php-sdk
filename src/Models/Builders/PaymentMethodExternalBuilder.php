<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodExternal;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodExternal
 *
 * @see PaymentMethodExternal
 */
class PaymentMethodExternalBuilder
{
    /**
     * @var PaymentMethodExternal
     */
    private $instance;

    private function __construct(PaymentMethodExternal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method external Builder object.
     */
    public static function init(string $kind, string $type): self
    {
        return new self(new PaymentMethodExternal($kind, $type));
    }

    /**
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Initializes a new payment method external object.
     */
    public function build(): PaymentMethodExternal
    {
        return CoreHelper::clone($this->instance);
    }
}
