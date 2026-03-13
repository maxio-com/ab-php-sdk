<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Contract;
use AdvancedBillingLib\Models\Register;
use Core\Utils\CoreHelper;

/**
 * Builder for model Contract
 *
 * @see Contract
 */
class ContractBuilder
{
    /**
     * @var Contract
     */
    private $instance;

    private function __construct(Contract $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Contract Builder object.
     */
    public static function init(): self
    {
        return new self(new Contract());
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
     * Sets number field.
     *
     * @param string|null $value
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Unsets number field.
     */
    public function unsetNumber(): self
    {
        $this->instance->unsetNumber();
        return $this;
    }

    /**
     * Sets register field.
     *
     * @param Register|null $value
     */
    public function register(?Register $value): self
    {
        $this->instance->setRegister($value);
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
     * Initializes a new Contract object.
     */
    public function build(): Contract
    {
        return CoreHelper::clone($this->instance);
    }
}
