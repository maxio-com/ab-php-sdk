<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentProfileParams;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentProfileParams
 *
 * @see PaymentProfileParams
 */
class PaymentProfileParamsBuilder
{
    /**
     * @var PaymentProfileParams
     */
    private $instance;

    private function __construct(PaymentProfileParams $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Profile Params Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentProfileParams());
    }

    /**
     * Sets first name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets card type field.
     *
     * @param string|null $value
     */
    public function cardType(?string $value): self
    {
        $this->instance->setCardType($value);
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
     * Initializes a new Payment Profile Params object.
     */
    public function build(): PaymentProfileParams
    {
        return CoreHelper::clone($this->instance);
    }
}
