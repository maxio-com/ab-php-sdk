<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidUsage;
use AdvancedBillingLib\Models\PrepaidUsageAllocationDetail;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidUsage
 *
 * @see PrepaidUsage
 */
class PrepaidUsageBuilder
{
    /**
     * @var PrepaidUsage
     */
    private $instance;

    private function __construct(PrepaidUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Usage Builder object.
     *
     * @param string $previousUnitBalance
     * @param string $previousOverageUnitBalance
     * @param int $newUnitBalance
     * @param int $newOverageUnitBalance
     * @param int $usageQuantity
     * @param int $overageUsageQuantity
     * @param int $componentId
     * @param string $componentHandle
     * @param string $memo
     * @param PrepaidUsageAllocationDetail[] $allocationDetails
     */
    public static function init(
        string $previousUnitBalance,
        string $previousOverageUnitBalance,
        int $newUnitBalance,
        int $newOverageUnitBalance,
        int $usageQuantity,
        int $overageUsageQuantity,
        int $componentId,
        string $componentHandle,
        string $memo,
        array $allocationDetails
    ): self {
        return new self(new PrepaidUsage(
            $previousUnitBalance,
            $previousOverageUnitBalance,
            $newUnitBalance,
            $newOverageUnitBalance,
            $usageQuantity,
            $overageUsageQuantity,
            $componentId,
            $componentHandle,
            $memo,
            $allocationDetails
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
     * Initializes a new Prepaid Usage object.
     */
    public function build(): PrepaidUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
