<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidUsage;
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
     * Initializes a new prepaid usage Builder object.
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
     * Initializes a new prepaid usage object.
     */
    public function build(): PrepaidUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
