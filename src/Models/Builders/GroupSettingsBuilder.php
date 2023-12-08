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
     * Initializes a new group settings Builder object.
     */
    public static function init(GroupTarget $target): self
    {
        return new self(new GroupSettings($target));
    }

    /**
     * Sets billing field.
     */
    public function billing(?GroupBilling $value): self
    {
        $this->instance->setBilling($value);
        return $this;
    }

    /**
     * Initializes a new group settings object.
     */
    public function build(): GroupSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
