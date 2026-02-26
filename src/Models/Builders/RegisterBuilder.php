<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Register;
use Core\Utils\CoreHelper;

/**
 * Builder for model Register
 *
 * @see Register
 */
class RegisterBuilder
{
    /**
     * @var Register
     */
    private $instance;

    private function __construct(Register $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Register Builder object.
     */
    public static function init(): self
    {
        return new self(new Register());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets maxio id field.
     *
     * @param string|null $value
     */
    public function maxioId(?string $value): self
    {
        $this->instance->setMaxioId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets currency code field.
     *
     * @param string|null $value
     */
    public function currencyCode(?string $value): self
    {
        $this->instance->setCurrencyCode($value);
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
     * Initializes a new Register object.
     */
    public function build(): Register
    {
        return CoreHelper::clone($this->instance);
    }
}
