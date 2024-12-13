<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PayerError;
use Core\Utils\CoreHelper;

/**
 * Builder for model PayerError
 *
 * @see PayerError
 */
class PayerErrorBuilder
{
    /**
     * @var PayerError
     */
    private $instance;

    private function __construct(PayerError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payer Error Builder object.
     */
    public static function init(): self
    {
        return new self(new PayerError());
    }

    /**
     * Sets last name field.
     *
     * @param string[]|null $value
     */
    public function lastName(?array $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets first name field.
     *
     * @param string[]|null $value
     */
    public function firstName(?array $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string[]|null $value
     */
    public function email(?array $value): self
    {
        $this->instance->setEmail($value);
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
     * Initializes a new Payer Error object.
     */
    public function build(): PayerError
    {
        return CoreHelper::clone($this->instance);
    }
}
