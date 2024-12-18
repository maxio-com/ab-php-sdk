<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\GroupTarget;
use Core\Utils\CoreHelper;

/**
 * Builder for model GroupTarget
 *
 * @see GroupTarget
 */
class GroupTargetBuilder
{
    /**
     * @var GroupTarget
     */
    private $instance;

    private function __construct(GroupTarget $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Group Target Builder object.
     *
     * @param string $type
     */
    public static function init(string $type): self
    {
        return new self(new GroupTarget($type));
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
     * Initializes a new Group Target object.
     */
    public function build(): GroupTarget
    {
        return CoreHelper::clone($this->instance);
    }
}
