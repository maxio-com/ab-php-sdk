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
     * Initializes a new Dunner Data Builder object.
     *
     * @param string $state
     * @param int $subscriptionId
     * @param int $revenueAtRiskInCents
     * @param \DateTime $createdAt
     * @param int $attempts
     * @param \DateTime $lastAttemptedAt
     */
    public static function init(
        string $state,
        int $subscriptionId,
        int $revenueAtRiskInCents,
        \DateTime $createdAt,
        int $attempts,
        \DateTime $lastAttemptedAt
    ): self {
        return new self(
            new DunnerData($state, $subscriptionId, $revenueAtRiskInCents, $createdAt, $attempts, $lastAttemptedAt)
        );
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
     * Initializes a new Dunner Data object.
     */
    public function build(): DunnerData
    {
        return CoreHelper::clone($this->instance);
    }
}
