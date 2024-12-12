<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\GroupBilling;
use Core\Utils\CoreHelper;

/**
 * Builder for model GroupBilling
 *
 * @see GroupBilling
 */
class GroupBillingBuilder
{
    /**
     * @var GroupBilling
     */
    private $instance;

    private function __construct(GroupBilling $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Group Billing Builder object.
     */
    public static function init(): self
    {
        return new self(new GroupBilling());
    }

    /**
     * Sets accrue field.
     *
     * @param bool|null $value
     */
    public function accrue(?bool $value): self
    {
        $this->instance->setAccrue($value);
        return $this;
    }

    /**
     * Sets align date field.
     *
     * @param bool|null $value
     */
    public function alignDate(?bool $value): self
    {
        $this->instance->setAlignDate($value);
        return $this;
    }

    /**
     * Sets prorate field.
     *
     * @param bool|null $value
     */
    public function prorate(?bool $value): self
    {
        $this->instance->setProrate($value);
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
     * Initializes a new Group Billing object.
     */
    public function build(): GroupBilling
    {
        return CoreHelper::clone($this->instance);
    }
}
