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
    public static function init(): self
    {
        return new self(new PaymentMethodExternalType());
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
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
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
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new payment method external type object.
     */
    public function build(): PaymentMethodExternalType
    {
        return CoreHelper::clone($this->instance);
    }
}
