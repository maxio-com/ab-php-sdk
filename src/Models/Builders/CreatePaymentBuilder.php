<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePayment
 *
 * @see CreatePayment
 */
class CreatePaymentBuilder
{
    /**
     * @var CreatePayment
     */
    private $instance;

    private function __construct(CreatePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create payment Builder object.
     */
    public static function init(string $amount, string $memo, string $paymentDetails, string $paymentMethod): self
    {
        return new self(new CreatePayment($amount, $memo, $paymentDetails, $paymentMethod));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new create payment object.
     */
    public function build(): CreatePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
