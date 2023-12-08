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
     * Initializes a new metered usage Builder object.
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
     * Initializes a new metered usage object.
     */
    public function build(): MeteredUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
