<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AggregatedEntitlement;
use AdvancedBillingLib\Models\AggregatedEntitlementsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model AggregatedEntitlementsResponse
 *
 * @see AggregatedEntitlementsResponse
 */
class AggregatedEntitlementsResponseBuilder
{
    /**
     * @var AggregatedEntitlementsResponse
     */
    private $instance;

    private function __construct(AggregatedEntitlementsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Aggregated Entitlements Response Builder object.
     *
     * @param int $subscriptionId
     * @param int $customerId
     * @param string $status
     * @param AggregatedEntitlement[] $entitlements
     */
    public static function init(int $subscriptionId, int $customerId, string $status, array $entitlements): self
    {
        return new self(new AggregatedEntitlementsResponse($subscriptionId, $customerId, $status, $entitlements));
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
     * Initializes a new Aggregated Entitlements Response object.
     */
    public function build(): AggregatedEntitlementsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
