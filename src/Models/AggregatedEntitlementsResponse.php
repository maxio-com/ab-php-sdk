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

class AggregatedEntitlementsResponse implements \JsonSerializable
{
    /**
     * @var int
     */
    private $subscriptionId;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var AggregatedEntitlement[]
     */
    private $entitlements;

    /**
     * @param int $subscriptionId
     * @param int $customerId
     * @param string $status
     * @param AggregatedEntitlement[] $entitlements
     */
    public function __construct(int $subscriptionId, int $customerId, string $status, array $entitlements)
    {
        $this->subscriptionId = $subscriptionId;
        $this->customerId = $customerId;
        $this->status = $status;
        $this->entitlements = $entitlements;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @required
     * @maps customer_id
     */
    public function setCustomerId(int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Status.
     * The subscription's current state, e.g. `active`, `trialing`, `canceled`.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The subscription's current state, e.g. `active`, `trialing`, `canceled`.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Entitlements.
     *
     * @return AggregatedEntitlement[]
     */
    public function getEntitlements(): array
    {
        return $this->entitlements;
    }

    /**
     * Sets Entitlements.
     *
     * @required
     * @maps entitlements
     *
     * @param AggregatedEntitlement[] $entitlements
     */
    public function setEntitlements(array $entitlements): void
    {
        $this->entitlements = $entitlements;
    }

    /**
     * Converts the AggregatedEntitlementsResponse object to a human-readable string representation.
     *
     * @return string The string representation of the AggregatedEntitlementsResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AggregatedEntitlementsResponse',
            [
                'subscriptionId' => $this->subscriptionId,
                'customerId' => $this->customerId,
                'status' => $this->status,
                'entitlements' => $this->entitlements,
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
        $json['subscription_id'] = $this->subscriptionId;
        $json['customer_id']     = $this->customerId;
        $json['status']          = $this->status;
        $json['entitlements']    = $this->entitlements;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
