<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepayment
 *
 * @see CreatePrepayment
 */
class CreatePrepaymentBuilder
{
    /**
     * @var CreatePrepayment
     */
    private $instance;

    private function __construct(CreatePrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Prepayment Builder object.
     *
     * @param float $amount
     * @param string $details
     * @param string $memo
     * @param string $method
     */
    public static function init(float $amount, string $details, string $memo, string $method): self
    {
        return new self(new CreatePrepayment($amount, $details, $memo, $method));
    }

    /**
     * Sets payment profile id field.
     *
     * @param int|null $value
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
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
     * Initializes a new Create Prepayment object.
     */
    public function build(): CreatePrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
