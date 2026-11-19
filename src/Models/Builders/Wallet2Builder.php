<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Wallet2;
use Core\Utils\CoreHelper;

/**
 * Builder for model Wallet2
 *
 * @see Wallet2
 */
class Wallet2Builder
{
    /**
     * @var Wallet2
     */
    private $instance;

    private function __construct(Wallet2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Wallet2());
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
     * Unsets name field.
     */
    public function unsetName(): self
    {
        $this->instance->unsetName();
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
     * Initializes a new Wallet 2 object.
     */
    public function build(): Wallet2
    {
        return CoreHelper::clone($this->instance);
    }
}
