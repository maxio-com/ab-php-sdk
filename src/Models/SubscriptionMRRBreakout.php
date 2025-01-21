<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class SubscriptionMRRBreakout implements \JsonSerializable
{
    /**
     * @var int
     */
    private $planAmountInCents;

    /**
     * @var int
     */
    private $usageAmountInCents;

    /**
     * @param int $planAmountInCents
     * @param int $usageAmountInCents
     */
    public function __construct(int $planAmountInCents, int $usageAmountInCents)
    {
        $this->planAmountInCents = $planAmountInCents;
        $this->usageAmountInCents = $usageAmountInCents;
    }

    /**
     * Returns Plan Amount in Cents.
     */
    public function getPlanAmountInCents(): int
    {
        return $this->planAmountInCents;
    }

    /**
     * Sets Plan Amount in Cents.
     *
     * @required
     * @maps plan_amount_in_cents
     */
    public function setPlanAmountInCents(int $planAmountInCents): void
    {
        $this->planAmountInCents = $planAmountInCents;
    }

    /**
     * Returns Usage Amount in Cents.
     */
    public function getUsageAmountInCents(): int
    {
        return $this->usageAmountInCents;
    }

    /**
     * Sets Usage Amount in Cents.
     *
     * @required
     * @maps usage_amount_in_cents
     */
    public function setUsageAmountInCents(int $usageAmountInCents): void
    {
        $this->usageAmountInCents = $usageAmountInCents;
    }

    /**
     * Converts the SubscriptionMRRBreakout object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionMRRBreakout object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionMRRBreakout',
            [
                'planAmountInCents' => $this->planAmountInCents,
                'usageAmountInCents' => $this->usageAmountInCents,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['plan_amount_in_cents']  = $this->planAmountInCents;
        $json['usage_amount_in_cents'] = $this->usageAmountInCents;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
