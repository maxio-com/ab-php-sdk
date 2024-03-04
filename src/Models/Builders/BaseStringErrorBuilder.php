<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BaseStringError;
use Core\Utils\CoreHelper;

/**
 * Builder for model BaseStringError
 *
 * @see BaseStringError
 */
class BaseStringErrorBuilder
{
    /**
     * @var BaseStringError
     */
    private $instance;

    private function __construct(BaseStringError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new base string error Builder object.
     */
    public static function init(): self
    {
        return new self(new BaseStringError());
    }

    /**
     * Sets base field.
     */
    public function base(?array $value): self
    {
        $this->instance->setBase($value);
        return $this;
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
     * Initializes a new base string error object.
     */
    public function build(): BaseStringError
    {
        return CoreHelper::clone($this->instance);
    }
}
