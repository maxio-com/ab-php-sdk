<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CountResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CountResponse
 *
 * @see CountResponse
 */
class CountResponseBuilder
{
    /**
     * @var CountResponse
     */
    private $instance;

    private function __construct(CountResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Count Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CountResponse());
    }

    /**
     * Sets count field.
     *
     * @param int|null $value
     */
    public function count(?int $value): self
    {
        $this->instance->setCount($value);
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
     * Initializes a new Count Response object.
     */
    public function build(): CountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
