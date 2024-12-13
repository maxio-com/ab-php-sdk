<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Errors;
use Core\Utils\CoreHelper;

/**
 * Builder for model Errors
 *
 * @see Errors
 */
class ErrorsBuilder
{
    /**
     * @var Errors
     */
    private $instance;

    private function __construct(Errors $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Errors Builder object.
     */
    public static function init(): self
    {
        return new self(new Errors());
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
     * Initializes a new Errors object.
     */
    public function build(): Errors
    {
        return CoreHelper::clone($this->instance);
    }
}
