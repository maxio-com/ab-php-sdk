<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MeteredUsage;
use Core\Utils\CoreHelper;

/**
 * Builder for model MeteredUsage
 *
 * @see MeteredUsage
 */
class MeteredUsageBuilder
{
    /**
     * @var MeteredUsage
     */
    private $instance;

    private function __construct(MeteredUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metered Usage Builder object.
     *
     * @param string $previousUnitBalance
     * @param int $newUnitBalance
     * @param int $usageQuantity
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     */
    public static function init(
        string $previousUnitBalance,
        int $newUnitBalance,
        int $usageQuantity,
        int $componentId,
        string $componentHandle,
        string $memo
    ): self {
        return new self(new MeteredUsage(
            $previousUnitBalance,
            $newUnitBalance,
            $usageQuantity,
            $componentId,
            $componentHandle,
            $memo
        ));
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
     * Initializes a new Metered Usage object.
     */
    public function build(): MeteredUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
