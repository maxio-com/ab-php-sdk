<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DunnerData;
use Core\Utils\CoreHelper;

/**
 * Builder for model DunnerData
 *
 * @see DunnerData
 */
class DunnerDataBuilder
{
    /**
     * @var DunnerData
     */
    private $instance;

    private function __construct(DunnerData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new dunner data Builder object.
     */
    public static function init(
        string $state,
        int $subscriptionId,
        int $revenueAtRiskInCents,
        string $createdAt,
        int $attempts,
        string $lastAttemptedAt
    ): self {
        return new self(
            new DunnerData($state, $subscriptionId, $revenueAtRiskInCents, $createdAt, $attempts, $lastAttemptedAt)
        );
    }

    /**
     * Initializes a new dunner data object.
     */
    public function build(): DunnerData
    {
        return CoreHelper::clone($this->instance);
    }
}
