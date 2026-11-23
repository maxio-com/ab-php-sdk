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

class FeatureCatalogItemsListResponse implements \JsonSerializable
{
    /**
     * @var FeatureCatalogItem[]
     */
    private $features;

    /**
     * @var int
     */
    private $subscriptionsCount;

    /**
     * @param FeatureCatalogItem[] $features
     * @param int $subscriptionsCount
     */
    public function __construct(array $features, int $subscriptionsCount)
    {
        $this->features = $features;
        $this->subscriptionsCount = $subscriptionsCount;
    }

    /**
     * Returns Features.
     *
     * @return FeatureCatalogItem[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    /**
     * Sets Features.
     *
     * @required
     * @maps features
     *
     * @param FeatureCatalogItem[] $features
     */
    public function setFeatures(array $features): void
    {
        $this->features = $features;
    }

    /**
     * Returns Subscriptions Count.
     * The number of subscriptions on this product/component that would be affected if a feature catalog
     * item change were propagated with `propagate_to_subscriptions=true`.
     */
    public function getSubscriptionsCount(): int
    {
        return $this->subscriptionsCount;
    }

    /**
     * Sets Subscriptions Count.
     * The number of subscriptions on this product/component that would be affected if a feature catalog
     * item change were propagated with `propagate_to_subscriptions=true`.
     *
     * @required
     * @maps subscriptions_count
     */
    public function setSubscriptionsCount(int $subscriptionsCount): void
    {
        $this->subscriptionsCount = $subscriptionsCount;
    }

    /**
     * Converts the FeatureCatalogItemsListResponse object to a human-readable string representation.
     *
     * @return string The string representation of the FeatureCatalogItemsListResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeatureCatalogItemsListResponse',
            [
                'features' => $this->features,
                'subscriptionsCount' => $this->subscriptionsCount,
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
        $json['features']            = $this->features;
        $json['subscriptions_count'] = $this->subscriptionsCount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
