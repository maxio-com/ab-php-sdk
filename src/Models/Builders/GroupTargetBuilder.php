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
     * Initializes a new group target Builder object.
     */
    public static function init(string $type): self
    {
        return new self(new GroupTarget($type));
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Initializes a new group target object.
     */
    public function build(): GroupTarget
    {
        return CoreHelper::clone($this->instance);
    }
}
