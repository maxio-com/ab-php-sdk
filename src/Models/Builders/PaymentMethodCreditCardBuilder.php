<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodCreditCard;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodCreditCard
 *
 * @see PaymentMethodCreditCard
 */
class PaymentMethodCreditCardBuilder
{
    /**
     * @var PaymentMethodCreditCard
     */
    private $instance;

    private function __construct(PaymentMethodCreditCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Method Credit Card Builder object.
     *
     * @param string $cardBrand
     * @param string $maskedCardNumber
     * @param string $type
     */
    public static function init(string $cardBrand, string $maskedCardNumber, string $type): self
    {
        return new self(new PaymentMethodCreditCard($cardBrand, $maskedCardNumber, $type));
    }

    /**
     * Sets card expiration field.
     *
     * @param string|null $value
     */
    public function cardExpiration(?string $value): self
    {
        $this->instance->setCardExpiration($value);
        return $this;
    }

    /**
     * Sets last four field.
     *
     * @param string|null $value
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
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Payment Method Credit Card object.
     */
    public function build(): PaymentMethodCreditCard
    {
        return CoreHelper::clone($this->instance);
    }
}
