<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Errors1;
use Core\Utils\CoreHelper;

/**
 * Builder for model Errors1
 *
 * @see Errors1
 */
class Errors1Builder
{
    /**
     * @var Errors1
     */
    private $instance;

    private function __construct(Errors1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Errors 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Errors1());
    }

    /**
     * Sets per page field.
     *
     * @param string[]|null $value
     */
    public function perPage(?array $value): self
    {
        $this->instance->setPerPage($value);
        return $this;
    }

    /**
     * Sets price point field.
     *
     * @param string[]|null $value
     */
    public function pricePoint(?array $value): self
    {
        $this->instance->setPricePoint($value);
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
     * Initializes a new Errors 1 object.
     */
    public function build(): Errors1
    {
        return CoreHelper::clone($this->instance);
    }
}
