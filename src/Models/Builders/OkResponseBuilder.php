<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OkResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model OkResponse
 *
 * @see OkResponse
 */
class OkResponseBuilder
{
    /**
     * @var OkResponse
     */
    private $instance;

    private function __construct(OkResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Ok Response Builder object.
     */
    public static function init(): self
    {
        return new self(new OkResponse());
    }

    /**
     * Sets ok field.
     *
     * @param string|null $value
     */
    public function ok(?string $value): self
    {
        $this->instance->setOk($value);
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
     * Initializes a new Ok Response object.
     */
    public function build(): OkResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
