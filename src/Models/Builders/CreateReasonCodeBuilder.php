<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateReasonCode;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateReasonCode
 *
 * @see CreateReasonCode
 */
class CreateReasonCodeBuilder
{
    /**
     * @var CreateReasonCode
     */
    private $instance;

    private function __construct(CreateReasonCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Reason Code Builder object.
     *
     * @param string $code
     * @param string $description
     */
    public static function init(string $code, string $description): self
    {
        return new self(new CreateReasonCode($code, $description));
    }

    /**
     * Sets position field.
     *
     * @param int|null $value
     */
    public function position(?int $value): self
    {
        $this->instance->setPosition($value);
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
     * Initializes a new Create Reason Code object.
     */
    public function build(): CreateReasonCode
    {
        return CoreHelper::clone($this->instance);
    }
}
