<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodNestedData;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodNestedData
 *
 * @see PaymentMethodNestedData
 */
class PaymentMethodNestedDataBuilder
{
    /**
     * @var PaymentMethodNestedData
     */
    private $instance;

    private function __construct(PaymentMethodNestedData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method nested data Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentMethodNestedData());
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
     * Sets masked account number field.
     */
    public function maskedAccountNumber(?string $value): self
    {
        $this->instance->setMaskedAccountNumber($value);
        return $this;
    }

    /**
     * Sets masked routing number field.
     */
    public function maskedRoutingNumber(?string $value): self
    {
        $this->instance->setMaskedRoutingNumber($value);
        return $this;
    }

    /**
     * Sets card brand field.
     */
    public function cardBrand(?string $value): self
    {
        $this->instance->setCardBrand($value);
        return $this;
    }

    /**
     * Sets card expiration field.
     */
    public function cardExpiration(?string $value): self
    {
        $this->instance->setCardExpiration($value);
        return $this;
    }

    /**
     * Sets last four field.
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Unsets last four field.
     */
    public function unsetLastFour(): self
    {
        $this->instance->unsetLastFour();
        return $this;
    }

    /**
     * Sets masked card number field.
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
        return $this;
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
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Initializes a new payment method nested data object.
     */
    public function build(): PaymentMethodNestedData
    {
        return CoreHelper::clone($this->instance);
    }
}
