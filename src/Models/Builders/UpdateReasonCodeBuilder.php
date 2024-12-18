<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateReasonCode;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateReasonCode
 *
 * @see UpdateReasonCode
 */
class UpdateReasonCodeBuilder
{
    /**
     * @var UpdateReasonCode
     */
    private $instance;

    private function __construct(UpdateReasonCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Reason Code Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateReasonCode());
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
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
     * Initializes a new Update Reason Code object.
     */
    public function build(): UpdateReasonCode
    {
        return CoreHelper::clone($this->instance);
    }
}
