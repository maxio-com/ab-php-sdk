<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\GroupBilling;
use AdvancedBillingLib\Models\GroupSettings;
use AdvancedBillingLib\Models\GroupTarget;
use Core\Utils\CoreHelper;

/**
 * Builder for model GroupSettings
 *
 * @see GroupSettings
 */
class GroupSettingsBuilder
{
    /**
     * @var GroupSettings
     */
    private $instance;

    private function __construct(GroupSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Group Settings Builder object.
     *
     * @param GroupTarget $target
     */
    public static function init(GroupTarget $target): self
    {
        return new self(new GroupSettings($target));
    }

    /**
     * Sets billing field.
     *
     * @param GroupBilling|null $value
     */
    public function billing(?GroupBilling $value): self
    {
        $this->instance->setBilling($value);
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
     * Initializes a new Group Settings object.
     */
    public function build(): GroupSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
